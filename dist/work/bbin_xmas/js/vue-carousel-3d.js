/*!
 * vue-carousel-3d v0.2.0
 * (c) 2020 Vladimir Bujanovic
 * https://github.com/wlada/vue-carousel-3d#readme
 */
!
function(t, e) {
	"object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.Carousel3d = e() : t.Carousel3d = e()
}(window, (function() {
	return function(t) {
		var e = {};

		function n(i) {
			if (e[i]) return e[i].exports;
			var r = e[i] = {
				i: i,
				l: !1,
				exports: {}
			};
			return t[i].call(r.exports, r, r.exports, n), r.l = !0, r.exports
		}
		return n.m = t, n.c = e, n.d = function(t, e, i) {
			n.o(t, e) || Object.defineProperty(t, e, {
				enumerable: !0,
				get: i
			})
		}, n.r = function(t) {
			"undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
				value: "Module"
			}), Object.defineProperty(t, "__esModule", {
				value: !0
			})
		}, n.t = function(t, e) {
			if (1 & e && (t = n(t)), 8 & e) return t;
			if (4 & e && "object" == typeof t && t && t.__esModule) return t;
			var i = Object.create(null);
			if (n.r(i), Object.defineProperty(i, "default", {
				enumerable: !0,
				value: t
			}), 2 & e && "string" != typeof t) for (var r in t) n.d(i, r, function(e) {
				return t[e]
			}.bind(null, r));
			return i
		}, n.n = function(t) {
			var e = t && t.__esModule ?
			function() {
				return t.
			default
			} : function() {
				return t
			};
			return n.d(e, "a", e), e
		}, n.o = function(t, e) {
			return Object.prototype.hasOwnProperty.call(t, e)
		}, n.p = "", n(n.s = 17)
	}([function(t, e, n) {
		"use strict";

		function i(t, e, n, i, r, s, o, a) {
			var u, l = "function" == typeof t ? t.options : t;
			if (e && (l.render = e, l.staticRenderFns = n, l._compiled = !0), i && (l.functional = !0), s && (l._scopeId = "data-v-" + s), o ? (u = function(t) {
				(t = t || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) || "undefined" == typeof __VUE_SSR_CONTEXT__ || (t = __VUE_SSR_CONTEXT__), r && r.call(this, t), t && t._registeredComponents && t._registeredComponents.add(o)
			}, l._ssrRegister = u) : r && (u = a ?
			function() {
				r.call(this, this.$root.$options.shadowRoot)
			} : r), u) if (l.functional) {
				l._injectStyles = u;
				var d = l.render;
				l.render = function(t, e) {
					return u.call(e), d(t, e)
				}
			} else {
				var c = l.beforeCreate;
				l.beforeCreate = c ? [].concat(c, u) : [u]
			}
			return {
				exports: t,
				options: l
			}
		}
		n.d(e, "a", (function() {
			return i
		}))
	}, function(t, e, n) {
		"use strict";
		var i = function() {
				var t = this,
					e = t.$createElement;
				return (t._self._c || e)("div", {
					staticClass: "carousel-3d-slide",
					class: t.computedClasses,
					style: t.slideStyle,
					on: {
						click: function(e) {
							return t.goTo()
						}
					}
				}, [t._t("default", null, {
					index: t.index,
					isCurrent: t.isCurrent,
					leftIndex: t.leftIndex,
					rightIndex: t.rightIndex
				})], 2)
			};

		function r(t, e, n) {
			return e in t ? Object.defineProperty(t, e, {
				value: n,
				enumerable: !0,
				configurable: !0,
				writable: !0
			}) : t[e] = n, t
		}
		i._withStripped = !0;
		var s = {
			name: "slide",
			props: {
				index: {
					type: Number
				}
			},
			data: function() {
				return {
					parent: this.$parent,
					styles: {},
					zIndex: 999
				}
			},
			computed: {
				isCurrent: function() {
					return this.index === this.parent.currentIndex
				},
				leftIndex: function() {
					return this.getSideIndex(this.parent.leftIndices)
				},
				rightIndex: function() {
					return this.getSideIndex(this.parent.rightIndices)
				},
				slideStyle: function() {
					var t = {};
					if (!this.isCurrent) {
						var e = this.leftIndex,
							n = this.rightIndex;
						(n >= 0 || e >= 0) && ((t = n >= 0 ? this.calculatePosition(n, !0, this.zIndex) : this.calculatePosition(e, !1, this.zIndex)).opacity = 1, t.visibility = "visible"), this.parent.hasHiddenSlides && (this.matchIndex(this.parent.leftOutIndex) ? t = this.calculatePosition(this.parent.leftIndices.length - 1, !1, this.zIndex) : this.matchIndex(this.parent.rightOutIndex) && (t = this.calculatePosition(this.parent.rightIndices.length - 1, !0, this.zIndex)))
					}
					return Object.assign(t, {
						"border-width": this.parent.border + "px",
						width: this.parent.slideWidth + "px",
						height: this.parent.slideHeight + "px",
						transition: " transform " + this.parent.animationSpeed + "ms,                opacity " + this.parent.animationSpeed + "ms,                visibility " + this.parent.animationSpeed + "ms"
					})
				},
				computedClasses: function() {
					var t;
					return r(t = {}, "left-".concat(this.leftIndex + 1), this.leftIndex >= 0), r(t, "right-".concat(this.rightIndex + 1), this.rightIndex >= 0), r(t, "current", this.isCurrent), t
				}
			},
			methods: {
				getSideIndex: function(t) {
					var e = this,
						n = -1;
					return t.forEach((function(t, i) {
						e.matchIndex(t) && (n = i)
					})), n
				},
				matchIndex: function(t) {
					return t >= 0 ? this.index === t : this.parent.total + t === this.index
				},
				calculatePosition: function(t, e, n) {
					var i = this.parent.disable3d ? 0 : parseInt(this.parent.inverseScaling) + 100 * (t + 1),
						r = this.parent.disable3d ? 0 : parseInt(this.parent.perspective),
						s = "auto" === this.parent.space ? parseInt((t + 1) * (this.parent.width / 1.5), 10) : parseInt((t + 1) * this.parent.space, 10);
					return {
						transform: e ? "translateX(" + s + "px) translateZ(-" + i + "px) rotateY(-" + r + "deg)" : "translateX(-" + s + "px) translateZ(-" + i + "px) rotateY(" + r + "deg)",
						top: "auto" === this.parent.space ? 0 : parseInt((t + 1) * this.parent.space),
						zIndex: n - (Math.abs(t) + 1)
					}
				},
				goTo: function() {
					this.isCurrent ? this.parent.onMainSlideClick() : !0 === this.parent.clickable && this.parent.goFar(this.index)
				}
			}
		},
			o = (n(13), n(0)),
			a = Object(o.a)(s, i, [], !1, null, null, null);
		a.options.__file = "src/Slide.vue", e.a = a.exports
	}, function(t, e, n) {
		"use strict";
		(function(t) {
			var i = n(9),
				r = n(10),
				s = n(1),
				o = function() {};
			e.a = {
				name: "carousel3d",
				components: {
					Controls: r.a,
					Slide: s.a
				},
				props: {
					count: {
						type: [Number, String],
					default:
						0
					},
					perspective: {
						type: [Number, String],
					default:
						35
					},
					display: {
						type: [Number, String],
					default:
						5
					},
					loop: {
						type: Boolean,
					default:
						!0
					},
					animationSpeed: {
						type: [Number, String],
					default:
						700
					},
					dir: {
						type: String,
					default:
						"rtl"
					},
					width: {
						type: [Number, String],
					default:
						"auto"
					},
					height: {
						type: [Number, String],
					default:
						"auto"
					},
					border: {
						type: [Number, String],
					default:
						1
					},
					space: {
						type: [Number, String],
					default:
						"auto"
					},
					startIndex: {
						type: [Number, String],
					default:
						0
					},
					clickable: {
						type: Boolean,
					default:
						!0
					},
					disable3d: {
						type: Boolean,
					default:
						!1
					},
					minSwipeDistance: {
						type: Number,
					default:
						10
					},
					inverseScaling: {
						type: [Number, String],
					default:
						300
					},
					controlsVisible: {
						type: Boolean,
					default:
						!1
					},
					controlsPrevHtml: {
						type: String,
					default:
						"&lsaquo;"
					},
					controlsNextHtml: {
						type: String,
					default:
						"&rsaquo;"
					},
					controlsWidth: {
						type: [String, Number],
					default:
						50
					},
					controlsHeight: {
						type: [String, Number],
					default:
						50
					},
					onLastSlide: {
						type: Function,
					default:
						o
					},
					onSlideChange: {
						type: Function,
					default:
						o
					},
					bias: {
						type: String,
					default:
						"left"
					},
					onMainSlideClick: {
						type: Function,
					default:
						o
					}
				},
				data: function() {
					return {
						viewport: 0,
						currentIndex: 0,
						total: 0,
						dragOffset: 0,
						dragStartX: 0,
						mousedown: !1,
						zIndex: 998
					}
				},
				mixins: [i.a],
				watch: {
					count: function() {
						this.computeData()
					}
				},
				computed: {
					isLastSlide: function() {
						return this.currentIndex === this.total - 1
					},
					isFirstSlide: function() {
						return 0 === this.currentIndex
					},
					isNextPossible: function() {
						return !(!this.loop && this.isLastSlide)
					},
					isPrevPossible: function() {
						return !(!this.loop && this.isFirstSlide)
					},
					slideWidth: function() {
						var e = this.viewport,
							n = parseInt(this.width) + 2 * parseInt(this.border, 10);
						return e < n && t.browser ? e : n
					},
					slideHeight: function() {
						var t = parseInt(this.width, 10) + 2 * parseInt(this.border, 10),
							e = parseInt(parseInt(this.height) + 2 * this.border, 10),
							n = this.calculateAspectRatio(t, e);
						return this.slideWidth / n
					},
					visible: function() {
						return this.display > this.total ? this.total : this.display
					},
					hasHiddenSlides: function() {
						return this.total > this.visible
					},
					leftIndices: function() {
						var t = (this.visible - 1) / 2;
						t = "left" === this.bias.toLowerCase() ? Math.ceil(t) : Math.floor(t);
						for (var e = [], n = 1; n <= t; n++) e.push("ltr" === this.dir ? (this.currentIndex + n) % this.total : (this.currentIndex - n) % this.total);
						return e
					},
					rightIndices: function() {
						var t = (this.visible - 1) / 2;
						t = "right" === this.bias.toLowerCase() ? Math.ceil(t) : Math.floor(t);
						for (var e = [], n = 1; n <= t; n++) e.push("ltr" === this.dir ? (this.currentIndex - n) % this.total : (this.currentIndex + n) % this.total);
						return e
					},
					leftOutIndex: function() {
						var t = (this.visible - 1) / 2;
						return t = "left" === this.bias.toLowerCase() ? Math.ceil(t) : Math.floor(t), t++, "ltr" === this.dir ? this.total - this.currentIndex - t <= 0 ? -parseInt(this.total - this.currentIndex - t) : this.currentIndex + t : this.currentIndex - t
					},
					rightOutIndex: function() {
						var t = (this.visible - 1) / 2;
						return t = "right" === this.bias.toLowerCase() ? Math.ceil(t) : Math.floor(t), t++, "ltr" === this.dir ? this.currentIndex - t : this.total - this.currentIndex - t <= 0 ? -parseInt(this.total - this.currentIndex - t, 10) : this.currentIndex + t
					}
				},
				methods: {
					goNext: function() {
						this.isNextPossible && (this.isLastSlide ? this.goSlide(0) : this.goSlide(this.currentIndex + 1))
					},
					goPrev: function() {
						this.isPrevPossible && (this.isFirstSlide ? this.goSlide(this.total - 1) : this.goSlide(this.currentIndex - 1))
					},
					goSlide: function(t) {
						var e = this;
						this.currentIndex = t < 0 || t > this.total - 1 ? 0 : t, this.isLastSlide && (this.onLastSlide !== o && console.warn("onLastSlide deprecated, please use @last-slide"), this.onLastSlide(this.currentIndex), this.$emit("last-slide", this.currentIndex)), this.$emit("before-slide-change", this.currentIndex), setTimeout((function() {
							return e.animationEnd()
						}), this.animationSpeed)
					},
					goFar: function(t) {
						var e = this,
							n = t === this.total - 1 && this.isFirstSlide ? -1 : t - this.currentIndex;
						this.isLastSlide && 0 === t && (n = 1);
						for (var i = n < 0 ? -n : n, r = 0, s = 0; s < i;) s += 1, setTimeout((function() {
							return n < 0 ? e.goPrev(i) : e.goNext(i)
						}), 1 === i ? 0 : r), r += this.animationSpeed / i
					},
					animationEnd: function() {
						this.onSlideChange !== o && console.warn("onSlideChange deprecated, please use @after-slide-change"), this.onSlideChange(this.currentIndex), this.$emit("after-slide-change", this.currentIndex)
					},
					handleMouseup: function() {
						this.mousedown = !1, this.dragOffset = 0
					},
					handleMousedown: function(t) {
						t.touches || t.preventDefault(), this.mousedown = !0, this.dragStartX = "ontouchstart" in window ? t.touches[0].clientX : t.clientX
					},
					handleMousemove: function(t) {
						if (this.mousedown) {
							var e = "ontouchstart" in window ? t.touches[0].clientX : t.clientX,
								n = this.dragStartX - e;
							this.dragOffset = n, this.dragOffset > this.minSwipeDistance ? (this.handleMouseup(), this.goNext()) : this.dragOffset < -this.minSwipeDistance && (this.handleMouseup(), this.goPrev())
						}
					},
					attachMutationObserver: function() {
						var t = this,
							e = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
						e && (this.mutationObserver = new e((function() {
							t.$nextTick((function() {
								t.computeData()
							}))
						})), this.$el && this.mutationObserver.observe(this.$el, {
							attributes: !0,
							childList: !0,
							characterData: !0
						}))
					},
					detachMutationObserver: function() {
						this.mutationObserver && this.mutationObserver.disconnect()
					},
					getSlideCount: function() {
						return void 0 !== this.$slots.
					default ?this.$slots.
					default.filter((function(t) {
							return void 0 !== t.tag
						})).length:
						0
					},
					calculateAspectRatio: function(t, e) {
						return Math.min(t / e)
					},
					computeData: function(t) {
						this.total = this.getSlideCount(), (t || this.currentIndex >= this.total) && (this.currentIndex = parseInt(this.startIndex) > this.total - 1 ? this.total - 1 : parseInt(this.startIndex)), this.viewport = this.$el.clientWidth
					},
					setSize: function() {
						this.$el.style.cssText += "height:" + this.slideHeight + "px;", this.$el.childNodes[0].style.cssText += "width:" + this.slideWidth + "px; height:" + this.slideHeight + "px;"
					}
				},
				mounted: function() {
					t.server || (this.computeData(!0), this.attachMutationObserver(), window.addEventListener("resize", this.setSize), "ontouchstart" in window ? (this.$el.addEventListener("touchstart", this.handleMousedown), this.$el.addEventListener("touchend", this.handleMouseup), this.$el.addEventListener("touchmove", this.handleMousemove)) : (this.$el.addEventListener("mousedown", this.handleMousedown), this.$el.addEventListener("mouseup", this.handleMouseup), this.$el.addEventListener("mousemove", this.handleMousemove)))
				},
				beforeDestroy: function() {
					t.server || (this.detachMutationObserver(), "ontouchstart" in window ? this.$el.removeEventListener("touchmove", this.handleMousemove) : this.$el.removeEventListener("mousemove", this.handleMousemove), window.removeEventListener("resize", this.setSize))
				}
			}
		}).call(this, n(8))
	}, function(t, e, n) {
		var i = n(12);
		"string" == typeof i && (i = [
			[t.i, i, ""]
		]), i.locals && (t.exports = i.locals), (0, n(7).
	default)("311ca4f5", i, !1, {})
	}, function(t, e, n) {
		var i = n(14);
		"string" == typeof i && (i = [
			[t.i, i, ""]
		]), i.locals && (t.exports = i.locals), (0, n(7).
	default)("07c48036", i, !1, {})
	}, function(t, e, n) {
		var i = n(16);
		"string" == typeof i && (i = [
			[t.i, i, ""]
		]), i.locals && (t.exports = i.locals), (0, n(7).
	default)("6481d979", i, !1, {})
	}, function(t, e) {
		t.exports = function(t) {
			var e = [];
			return e.toString = function() {
				return this.map((function(e) {
					var n = function(t, e) {
							var n = t[1] || "",
								i = t[3];
							if (!i) return n;
							if (e && "function" == typeof btoa) {
								var r = function(t) {
										return "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(t)))) + " */"
									}(i),
									s = i.sources.map((function(t) {
										return "/*# sourceURL=" + i.sourceRoot + t + " */"
									}));
								return [n].concat(s).concat([r]).join("\n")
							}
							return [n].join("\n")
						}(e, t);
					return e[2] ? "@media " + e[2] + "{" + n + "}" : n
				})).join("")
			}, e.i = function(t, n) {
				"string" == typeof t && (t = [
					[null, t, ""]
				]);
				for (var i = {}, r = 0; r < this.length; r++) {
					var s = this[r][0];
					"number" == typeof s && (i[s] = !0)
				}
				for (r = 0; r < t.length; r++) {
					var o = t[r];
					"number" == typeof o[0] && i[o[0]] || (n && !o[2] ? o[2] = n : n && (o[2] = "(" + o[2] + ") and (" + n + ")"), e.push(o))
				}
			}, e
		}
	}, function(t, e, n) {
		"use strict";

		function i(t, e) {
			for (var n = [], i = {}, r = 0; r < e.length; r++) {
				var s = e[r],
					o = s[0],
					a = {
						id: t + ":" + r,
						css: s[1],
						media: s[2],
						sourceMap: s[3]
					};
				i[o] ? i[o].parts.push(a) : n.push(i[o] = {
					id: o,
					parts: [a]
				})
			}
			return n
		}
		n.r(e), n.d(e, "default", (function() {
			return f
		}));
		var r = "undefined" != typeof document;
		if ("undefined" != typeof DEBUG && DEBUG && !r) throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");
		var s = {},
			o = r && (document.head || document.getElementsByTagName("head")[0]),
			a = null,
			u = 0,
			l = !1,
			d = function() {},
			c = null,
			h = "data-vue-ssr-id",
			p = "undefined" != typeof navigator && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase());

		function f(t, e, n, r) {
			l = n, c = r || {};
			var o = i(t, e);
			return v(o), function(e) {
				for (var n = [], r = 0; r < o.length; r++) {
					var a = o[r];
					(u = s[a.id]).refs--, n.push(u)
				}
				for (e ? v(o = i(t, e)) : o = [], r = 0; r < n.length; r++) {
					var u;
					if (0 === (u = n[r]).refs) {
						for (var l = 0; l < u.parts.length; l++) u.parts[l]();
						delete s[u.id]
					}
				}
			}
		}
		function v(t) {
			for (var e = 0; e < t.length; e++) {
				var n = t[e],
					i = s[n.id];
				if (i) {
					i.refs++;
					for (var r = 0; r < i.parts.length; r++) i.parts[r](n.parts[r]);
					for (; r < n.parts.length; r++) i.parts.push(g(n.parts[r]));
					i.parts.length > n.parts.length && (i.parts.length = n.parts.length)
				} else {
					var o = [];
					for (r = 0; r < n.parts.length; r++) o.push(g(n.parts[r]));
					s[n.id] = {
						id: n.id,
						refs: 1,
						parts: o
					}
				}
			}
		}
		function m() {
			var t = document.createElement("style");
			return t.type = "text/css", o.appendChild(t), t
		}
		function g(t) {
			var e, n, i = document.querySelector("style[" + h + '~="' + t.id + '"]');
			if (i) {
				if (l) return d;
				i.parentNode.removeChild(i)
			}
			if (p) {
				var r = u++;
				i = a || (a = m()), e = b.bind(null, i, r, !1), n = b.bind(null, i, r, !0)
			} else i = m(), e = function(t, e) {
				var n = e.css,
					i = e.media,
					r = e.sourceMap;
				if (i && t.setAttribute("media", i), c.ssrId && t.setAttribute(h, e.id), r && (n += "\n/*# sourceURL=" + r.sources[0] + " */", n += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(r)))) + " */"), t.styleSheet) t.styleSheet.cssText = n;
				else {
					for (; t.firstChild;) t.removeChild(t.firstChild);
					t.appendChild(document.createTextNode(n))
				}
			}.bind(null, i), n = function() {
				i.parentNode.removeChild(i)
			};
			return e(t), function(i) {
				if (i) {
					if (i.css === t.css && i.media === t.media && i.sourceMap === t.sourceMap) return;
					e(t = i)
				} else n()
			}
		}
		var x = function() {
				var t = [];
				return function(e, n) {
					return t[e] = n, t.filter(Boolean).join("\n")
				}
			}();

		function b(t, e, n, i) {
			var r = n ? "" : i.css;
			if (t.styleSheet) t.styleSheet.cssText = x(e, r);
			else {
				var s = document.createTextNode(r),
					o = t.childNodes;
				o[e] && t.removeChild(o[e]), o.length ? t.insertBefore(s, o[e]) : t.appendChild(s)
			}
		}
	}, function(t, e) {
		var n, i, r = t.exports = {};

		function s() {
			throw new Error("setTimeout has not been defined")
		}
		function o() {
			throw new Error("clearTimeout has not been defined")
		}
		function a(t) {
			if (n === setTimeout) return setTimeout(t, 0);
			if ((n === s || !n) && setTimeout) return n = setTimeout, setTimeout(t, 0);
			try {
				return n(t, 0)
			} catch (e) {
				try {
					return n.call(null, t, 0)
				} catch (e) {
					return n.call(this, t, 0)
				}
			}
		}!
		function() {
			try {
				n = "function" == typeof setTimeout ? setTimeout : s
			} catch (t) {
				n = s
			}
			try {
				i = "function" == typeof clearTimeout ? clearTimeout : o
			} catch (t) {
				i = o
			}
		}();
		var u, l = [],
			d = !1,
			c = -1;

		function h() {
			d && u && (d = !1, u.length ? l = u.concat(l) : c = -1, l.length && p())
		}
		function p() {
			if (!d) {
				var t = a(h);
				d = !0;
				for (var e = l.length; e;) {
					for (u = l, l = []; ++c < e;) u && u[c].run();
					c = -1, e = l.length
				}
				u = null, d = !1, function(t) {
					if (i === clearTimeout) return clearTimeout(t);
					if ((i === o || !i) && clearTimeout) return i = clearTimeout, clearTimeout(t);
					try {
						i(t)
					} catch (e) {
						try {
							return i.call(null, t)
						} catch (e) {
							return i.call(this, t)
						}
					}
				}(t)
			}
		}
		function f(t, e) {
			this.fun = t, this.array = e
		}
		function v() {}
		r.nextTick = function(t) {
			var e = new Array(arguments.length - 1);
			if (arguments.length > 1) for (var n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
			l.push(new f(t, e)), 1 !== l.length || d || a(p)
		}, f.prototype.run = function() {
			this.fun.apply(null, this.array)
		}, r.title = "browser", r.browser = !0, r.env = {}, r.argv = [], r.version = "", r.versions = {}, r.on = v, r.addListener = v, r.once = v, r.off = v, r.removeListener = v, r.removeAllListeners = v, r.emit = v, r.prependListener = v, r.prependOnceListener = v, r.listeners = function(t) {
			return []
		}, r.binding = function(t) {
			throw new Error("process.binding is not supported")
		}, r.cwd = function() {
			return "/"
		}, r.chdir = function(t) {
			throw new Error("process.chdir is not supported")
		}, r.umask = function() {
			return 0
		}
	}, function(t, e, n) {
		"use strict";
		(function(t) {
			var n = {
				props: {
					autoplay: {
						type: Boolean,
					default:
						!1
					},
					autoplayTimeout: {
						type: Number,
					default:
						2e3
					},
					autoplayHoverPause: {
						type: Boolean,
					default:
						!0
					}
				},
				data: function() {
					return {
						autoplayInterval: null
					}
				},
				destroyed: function() {
					t.server || (this.pauseAutoplay(), this.$el.removeEventListener("mouseenter", this.pauseAutoplay), this.$el.removeEventListener("mouseleave", this.startAutoplay))
				},
				methods: {
					pauseAutoplay: function() {
						this.autoplayInterval && (this.autoplayInterval = clearInterval(this.autoplayInterval))
					},
					startAutoplay: function() {
						var t = this;
						this.autoplay && (this.autoplayInterval = setInterval((function() {
							"ltr" === t.dir ? t.goPrev() : t.goNext()
						}), this.autoplayTimeout))
					}
				},
				mounted: function() {
					!t.server && this.autoplayHoverPause && (this.$el.addEventListener("mouseenter", this.pauseAutoplay), this.$el.addEventListener("mouseleave", this.startAutoplay), this.startAutoplay())
				}
			};
			e.a = n
		}).call(this, n(8))
	}, function(t, e, n) {
		"use strict";
		var i = function() {
				var t = this,
					e = t.$createElement,
					n = t._self._c || e;
				return n("div", {
					staticClass: "carousel-3d-controls"
				}, [n("a", {
					staticClass: "prev",
					class: {
						disabled: !t.parent.isPrevPossible
					},
					style: "width: " + t.width + "px; height: " + t.height + "px; line-height: " + t.height + "px;",
					attrs: {
						href: "#"
					},
					on: {
						click: function(e) {
							return e.preventDefault(), t.parent.goPrev()
						}
					}
				}, [n("span", {
					domProps: {
						innerHTML: t._s(t.prevHtml)
					}
				})]), t._v(" "), n("a", {
					staticClass: "next",
					class: {
						disabled: !t.parent.isNextPossible
					},
					style: "width: " + t.width + "px; height: " + t.height + "px; line-height: " + t.height + "px;",
					attrs: {
						href: "#"
					},
					on: {
						click: function(e) {
							return e.preventDefault(), t.parent.goNext()
						}
					}
				}, [n("span", {
					domProps: {
						innerHTML: t._s(t.nextHtml)
					}
				})])])
			};
		i._withStripped = !0;
		var r = {
			name: "controls",
			props: {
				width: {
					type: [String, Number],
				default:
					50
				},
				height: {
					type: [String, Number],
				default:
					60
				},
				prevHtml: {
					type: String,
				default:
					"&lsaquo;"
				},
				nextHtml: {
					type: String,
				default:
					"&rsaquo;"
				}
			},
			data: function() {
				return {
					parent: this.$parent
				}
			}
		},
			s = (n(11), n(0)),
			o = Object(s.a)(r, i, [], !1, null, "d8f7eea2", null);
		o.options.__file = "src/Controls.vue", e.a = o.exports
	}, function(t, e, n) {
		"use strict";
		var i = n(3);
		n.n(i).a
	}, function(t, e, n) {
		(t.exports = n(6)(!1)).push([t.i, "\n.carousel-3d-controls[data-v-d8f7eea2] {\n    position: absolute;\n    top: 50%;\n    height: 0;\n    margin-top: -30px;\n    left: 0;\n    width: 100%;\n    z-index: 1000;\n}\n.next[data-v-d8f7eea2], .prev[data-v-d8f7eea2] {\n    width: 60px;\n    position: absolute;\n    z-index: 1010;\n    font-size: 60px;\n    height: 60px;\n    line-height: 60px;\n    color: #333;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    text-decoration: none;\n    top: 0;\n}\n.next[data-v-d8f7eea2]:hover, .prev[data-v-d8f7eea2]:hover {\n    cursor: pointer;\n    opacity: 0.7;\n}\n.prev[data-v-d8f7eea2] {\n    left: 10px;\n    text-align: left;\n}\n.next[data-v-d8f7eea2] {\n    right: 10px;\n    text-align: right;\n}\n.disabled[data-v-d8f7eea2] {\n    opacity: 0.2;\n    cursor: default;\n}\n.disabled[data-v-d8f7eea2]:hover {\n    cursor: default;\n    opacity: 0.2;\n}\n", ""])
	}, function(t, e, n) {
		"use strict";
		var i = n(4);
		n.n(i).a
	}, function(t, e, n) {
		(t.exports = n(6)(!1)).push([t.i, ""])
	}, function(t, e, n) {
		"use strict";
		var i = n(5);
		n.n(i).a
	}, function(t, e, n) {
		(t.exports = n(6)(!1)).push([t.i, ""])
	}, function(t, e, n) {
		"use strict";
		n.r(e);
		var i = function() {
				var t = this,
					e = t.$createElement,
					n = t._self._c || e;
				return n("div", {
					staticClass: "carousel-3d-container",
					style: {
						height: this.slideHeight + "px"
					}
				}, [n("div", {
					staticClass: "carousel-3d-slider",
					style: {
						// width: this.slideWidth + "px",
						// height: this.slideHeight + "px"
					}
				}, [t._t("default")], 2), t._v(" "), t.controlsVisible ? n("controls", {
					attrs: {
						"next-html": t.controlsNextHtml,
						"prev-html": t.controlsPrevHtml,
						width: t.controlsWidth,
						height: t.controlsHeight
					}
				}) : t._e()], 1)
			};
		i._withStripped = !0;
		var r = n(2).a,
			s = (n(15), n(0)),
			o = Object(s.a)(r, i, [], !1, null, "4ca3afac", null);
		o.options.__file = "src/Carousel3d.vue";
		var a = o.exports,
			u = n(1);
		n.d(e, "Carousel3d", (function() {
			return a
		})), n.d(e, "Slide", (function() {
			return u.a
		})), e.
	default = {
			install: function(t) {
				t.component("carousel3d", a), t.component("slide", u.a)
			}
		}
	}])
}));