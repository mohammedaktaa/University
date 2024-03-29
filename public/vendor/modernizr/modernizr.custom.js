/*! modernizr 3.4.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-backgroundsize-bgpositionshorthand-bgpositionxy-bgrepeatspace_bgrepeatround-bgsizecover-borderradius-cssanimations-csscalc-csstransforms-csstransforms3d-csstransitions-flexboxtweener-fontface-inlinesvg-localstorage-multiplebgs-preserve3d-sessionstorage-smil-svgclippaths-svgfilters-svgforeignobject-todataurljpeg_todataurlpng_todataurlwebp-setclasses !*/
!function (e, t, n) {
    function r(e, t) {
        return typeof e === t
    }

    function s() {
        var e, t, n, s, a, o, i;
        for (var d in w) if (w.hasOwnProperty(d)) {
            if (e = [], t = w[d], t.name && (e.push(t.name.toLowerCase()), t.options && t.options.aliases && t.options.aliases.length)) for (n = 0; n < t.options.aliases.length; n++) e.push(t.options.aliases[n].toLowerCase());
            for (s = r(t.fn, "function") ? t.fn() : t.fn, a = 0; a < e.length; a++) o = e[a], i = o.split("."), 1 === i.length ? Modernizr[i[0]] = s : (!Modernizr[i[0]] || Modernizr[i[0]] instanceof Boolean || (Modernizr[i[0]] = new Boolean(Modernizr[i[0]])), Modernizr[i[0]][i[1]] = s), b.push((s ? "" : "no-") + i.join("-"))
        }
    }

    function a(e) {
        var t = x.className, n = Modernizr._config.classPrefix || "";
        if (T && (t = t.baseVal), Modernizr._config.enableJSClass) {
            var r = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
            t = t.replace(r, "$1" + n + "js$2")
        }
        Modernizr._config.enableClasses && (t += " " + n + e.join(" " + n), T ? x.className.baseVal = t : x.className = t)
    }

    function o(e, t) {
        return !!~("" + e).indexOf(t)
    }

    function i() {
        return "function" != typeof t.createElement ? t.createElement(arguments[0]) : T ? t.createElementNS.call(t, "http://www.w3.org/2000/svg", arguments[0]) : t.createElement.apply(t, arguments)
    }

    function d() {
        var e = t.body;
        return e || (e = i(T ? "svg" : "body"), e.fake = !0), e
    }

    function l(e, n, r, s) {
        var a, o, l, u, c = "modernizr", f = i("div"), p = d();
        if (parseInt(r, 10)) for (; r--;) l = i("div"), l.id = s ? s[r] : c + (r + 1), f.appendChild(l);
        return a = i("style"), a.type = "text/css", a.id = "s" + c, (p.fake ? p : f).appendChild(a), p.appendChild(f), a.styleSheet ? a.styleSheet.cssText = e : a.appendChild(t.createTextNode(e)), f.id = c, p.fake && (p.style.background = "", p.style.overflow = "hidden", u = x.style.overflow, x.style.overflow = "hidden", x.appendChild(p)), o = n(f, e), p.fake ? (p.parentNode.removeChild(p), x.style.overflow = u, x.offsetHeight) : f.parentNode.removeChild(f), !!o
    }

    function u(e) {
        return e.replace(/([A-Z])/g, function (e, t) {
            return "-" + t.toLowerCase()
        }).replace(/^ms-/, "-ms-")
    }

    function c(t, n, r) {
        var s;
        if ("getComputedStyle" in e) {
            s = getComputedStyle.call(e, t, n);
            var a = e.console;
            if (null !== s) r && (s = s.getPropertyValue(r)); else if (a) {
                var o = a.error ? "error" : "log";
                a[o].call(a, "getComputedStyle returning null, its possible modernizr test results are inaccurate")
            }
        } else s = !n && t.currentStyle && t.currentStyle[r];
        return s
    }

    function f(t, r) {
        var s = t.length;
        if ("CSS" in e && "supports" in e.CSS) {
            for (; s--;) if (e.CSS.supports(u(t[s]), r)) return !0;
            return !1
        }
        if ("CSSSupportsRule" in e) {
            for (var a = []; s--;) a.push("(" + u(t[s]) + ":" + r + ")");
            return a = a.join(" or "), l("@supports (" + a + ") { #modernizr { position: absolute; } }", function (e) {
                return "absolute" == c(e, null, "position")
            })
        }
        return n
    }

    function p(e) {
        return e.replace(/([a-z])-([a-z])/g, function (e, t, n) {
            return t + n.toUpperCase()
        }).replace(/^-/, "")
    }

    function g(e, t, s, a) {
        function d() {
            u && (delete k.style, delete k.modElem)
        }

        if (a = r(a, "undefined") ? !1 : a, !r(s, "undefined")) {
            var l = f(e, s);
            if (!r(l, "undefined")) return l
        }
        for (var u, c, g, m, v, h = ["modernizr", "tspan", "samp"]; !k.style && h.length;) u = !0, k.modElem = i(h.shift()), k.style = k.modElem.style;
        for (g = e.length, c = 0; g > c; c++) if (m = e[c], v = k.style[m], o(m, "-") && (m = p(m)), k.style[m] !== n) {
            if (a || r(s, "undefined")) return d(), "pfx" == t ? m : !0;
            try {
                k.style[m] = s
            } catch (y) {
            }
            if (k.style[m] != v) return d(), "pfx" == t ? m : !0
        }
        return d(), !1
    }

    function m(e, t) {
        return function () {
            return e.apply(t, arguments)
        }
    }

    function v(e, t, n) {
        var s;
        for (var a in e) if (e[a] in t) return n === !1 ? e[a] : (s = t[e[a]], r(s, "function") ? m(s, n || t) : s);
        return !1
    }

    function h(e, t, n, s, a) {
        var o = e.charAt(0).toUpperCase() + e.slice(1), i = (e + " " + E.join(o + " ") + o).split(" ");
        return r(t, "string") || r(t, "undefined") ? g(i, t, s, a) : (i = (e + " " + z.join(o + " ") + o).split(" "), v(i, t, n))
    }

    function y(e, t, r) {
        return h(e, n, n, t, r)
    }

    var w = [], S = {
        _version: "3.4.0",
        _config: {classPrefix: "", enableClasses: !0, enableJSClass: !0, usePrefixes: !0},
        _q: [],
        on: function (e, t) {
            var n = this;
            setTimeout(function () {
                t(n[e])
            }, 0)
        },
        addTest: function (e, t, n) {
            w.push({name: e, fn: t, options: n})
        },
        addAsyncTest: function (e) {
            w.push({name: null, fn: e})
        }
    }, Modernizr = function () {
    };
    Modernizr.prototype = S, Modernizr = new Modernizr;
    var b = [], x = t.documentElement, T = "svg" === x.nodeName.toLowerCase(), C = "Moz O ms Webkit",
        E = S._config.usePrefixes ? C.split(" ") : [];
    S._cssomPrefixes = E;
    var _ = {elem: i("modernizr")};
    Modernizr._q.push(function () {
        delete _.elem
    });
    var k = {style: _.elem.style};
    Modernizr._q.unshift(function () {
        delete k.style
    });
    var z = S._config.usePrefixes ? C.toLowerCase().split(" ") : [];
    S._domPrefixes = z, S.testAllProps = h, S.testAllProps = y, Modernizr.addTest("backgroundsize", y("backgroundSize", "100%", !0)), Modernizr.addTest("bgpositionshorthand", function () {
        var e = i("a"), t = e.style, n = "right 10px bottom 10px";
        return t.cssText = "background-position: " + n + ";", t.backgroundPosition === n
    }), Modernizr.addTest("bgpositionxy", function () {
        return y("backgroundPositionX", "3px", !0) && y("backgroundPositionY", "5px", !0)
    }), Modernizr.addTest("bgrepeatround", y("backgroundRepeat", "round")), Modernizr.addTest("bgrepeatspace", y("backgroundRepeat", "space")), Modernizr.addTest("bgsizecover", y("backgroundSize", "cover")), Modernizr.addTest("borderradius", y("borderRadius", "0px", !0)), Modernizr.addTest("cssanimations", y("animationName", "a", !0));
    var P = S._config.usePrefixes ? " -webkit- -moz- -o- -ms- ".split(" ") : ["", ""];
    S._prefixes = P, Modernizr.addTest("csscalc", function () {
        var e = "width:", t = "calc(10px);", n = i("a");
        return n.style.cssText = e + P.join(t + e), !!n.style.length
    }), Modernizr.addTest("csstransforms", function () {
        return -1 === navigator.userAgent.indexOf("Android 2.") && y("transform", "scale(1)", !0)
    });
    var R = S.testStyles = l, N = "CSS" in e && "supports" in e.CSS, j = "supportsCSS" in e;
    Modernizr.addTest("supports", N || j), Modernizr.addTest("csstransforms3d", function () {
        var e = !!y("perspective", "1px", !0), t = Modernizr._config.usePrefixes;
        if (e && (!t || "webkitPerspective" in x.style)) {
            var n, r = "#modernizr{width:0;height:0}";
            Modernizr.supports ? n = "@supports (perspective: 1px)" : (n = "@media (transform-3d)", t && (n += ",(-webkit-transform-3d)")), n += "{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}", R(r + n, function (t) {
                e = 7 === t.offsetWidth && 18 === t.offsetHeight
            })
        }
        return e
    }), Modernizr.addTest("csstransitions", y("transition", "all", !0)), Modernizr.addTest("flexboxtweener", y("flexAlign", "end", !0));
    var A = function () {
        var e = navigator.userAgent, t = e.match(/w(eb)?osbrowser/gi),
            n = e.match(/windows phone/gi) && e.match(/iemobile\/([0-9])+/gi) && parseFloat(RegExp.$1) >= 9;
        return t || n
    }();
    A ? Modernizr.addTest("fontface", !1) : R('@font-face {font-family:"font";src:url("https://")}', function (e, n) {
        var r = t.getElementById("smodernizr"), s = r.sheet || r.styleSheet,
            a = s ? s.cssRules && s.cssRules[0] ? s.cssRules[0].cssText : s.cssText || "" : "",
            o = /src/i.test(a) && 0 === a.indexOf(n.split(" ")[0]);
        Modernizr.addTest("fontface", o)
    }), Modernizr.addTest("inlinesvg", function () {
        var e = i("div");
        return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI)
    }), Modernizr.addTest("localstorage", function () {
        var e = "modernizr";
        try {
            return localStorage.setItem(e, e), localStorage.removeItem(e), !0
        } catch (t) {
            return !1
        }
    }), Modernizr.addTest("multiplebgs", function () {
        var e = i("a").style;
        return e.cssText = "background:url(https://),url(https://),red url(https://)", /(url\s*\(.*?){3}/.test(e.background)
    }), Modernizr.addTest("preserve3d", function () {
        var t, n, r = e.CSS, s = !1;
        return r && r.supports && r.supports("(transform-style: preserve-3d)") ? !0 : (t = i("a"), n = i("a"), t.style.cssText = "display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);", n.style.cssText = "display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);", t.appendChild(n), x.appendChild(t), s = n.getBoundingClientRect(), x.removeChild(t), s = s.width && s.width < 4)
    }), Modernizr.addTest("sessionstorage", function () {
        var e = "modernizr";
        try {
            return sessionStorage.setItem(e, e), sessionStorage.removeItem(e), !0
        } catch (t) {
            return !1
        }
    });
    var O = {}.toString;
    Modernizr.addTest("smil", function () {
        return !!t.createElementNS && /SVGAnimate/.test(O.call(t.createElementNS("http://www.w3.org/2000/svg", "animate")))
    }), Modernizr.addTest("svgclippaths", function () {
        return !!t.createElementNS && /SVGClipPath/.test(O.call(t.createElementNS("http://www.w3.org/2000/svg", "clipPath")))
    }), Modernizr.addTest("svgfilters", function () {
        var t = !1;
        try {
            t = "SVGFEColorMatrixElement" in e && 2 == SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE
        } catch (n) {
        }
        return t
    }), Modernizr.addTest("svgforeignobject", function () {
        return !!t.createElementNS && /SVGForeignObject/.test(O.call(t.createElementNS("http://www.w3.org/2000/svg", "foreignObject")))
    }), Modernizr.addTest("canvas", function () {
        var e = i("canvas");
        return !(!e.getContext || !e.getContext("2d"))
    });
    var V = i("canvas");
    Modernizr.addTest("todataurljpeg", function () {
        return !!Modernizr.canvas && 0 === V.toDataURL("image/jpeg").indexOf("data:image/jpeg")
    }), Modernizr.addTest("todataurlpng", function () {
        return !!Modernizr.canvas && 0 === V.toDataURL("image/png").indexOf("data:image/png")
    }), Modernizr.addTest("todataurlwebp", function () {
        var e = !1;
        try {
            e = !!Modernizr.canvas && 0 === V.toDataURL("image/webp").indexOf("data:image/webp")
        } catch (t) {
        }
        return e
    }), s(), a(b), delete S.addTest, delete S.addAsyncTest;
    for (var L = 0; L < Modernizr._q.length; L++) Modernizr._q[L]();
    e.Modernizr = Modernizr
}(window, document);