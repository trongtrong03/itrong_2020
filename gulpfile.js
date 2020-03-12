'use strict';

const gulp = require('gulp');
const fileinclude = require('gulp-file-include');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');      // 自動編譯前綴
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');                  // 壓縮合併文件
const image = require('gulp-image');                    // 影像複製
const clean = require('gulp-clean');                    // 清空資料夾後重新打包

sass.compiler = require('node-sass');

// 編譯 HTML
function compileHtml()  {
    return gulp.src('assets/**/*.html')
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file',
            indent: true    //保留文件的缩进
        }))
        .pipe(gulp.dest('dist/'))
}

// 編譯 SCSS
function compileCss()  {
    return gulp.src('assets/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        // outputStyle: nested, expanded, compact, compressed
        .pipe(autoprefixer({
            cascade: false,
        }))  // 自動編譯前綴
        .pipe(concat('style.css'))  // 將所有 scss 合併輸出為單一檔案
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'))
}

// 編譯 JS
function compileJs()  {
    return gulp.src([
            'assets/js/jquery-2.1.4.min.js',
            'assets/js/jquery.particleground.js',
            'assets/js/vue.min.js',
            'assets/js/vue-app.js',
            'assets/js/script.js',
        ])  // 編譯指定 JQ 文件才不會 DOM 出現無法定義 $ 符號的錯誤訊息
        .pipe(gulp.dest('dist/js'))
}

// 影像複製
function compileImg()  {
    return gulp.src('assets/images/**/*')
        .pipe(image())
        .pipe(gulp.dest('dist/images'))
}

// 清空指定資料夾內容
function cleanAll()  {
    return gulp.src('dist/images')
        .pipe(clean())
}

exports.compileHtml = compileHtml;
exports.compileCss = compileCss;
exports.compileJs = compileJs;
exports.compileImg = compileImg;
exports.cleanAll = cleanAll;

// 執行監聽
function watch()  {
    gulp.watch('assets/**/*.html', gulp.series('compileHtml'))
    gulp.watch('assets/scss/**/*.scss', gulp.series('compileCss'))
    gulp.watch('assets/js/**/*.js', gulp.series('compileJs'))
    gulp.watch('assets/images/**/*', gulp.series('cleanAll','compileImg'))
}

// 建構任務流程
const bulid = gulp.series(cleanAll, compileImg, compileHtml, compileCss, compileJs, watch);

// 執行預設任務
gulp.task('default', bulid);