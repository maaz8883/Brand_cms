/*!
 * Bootstrap v5.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2023 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
!function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e(require("@popperjs/core")) : "function" == typeof define && define.amd ? define(["@popperjs/core"], e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = e(t.Popper)
}(this, function(t) {
    "use strict";
    let e = function t(e) {
        let i = Object.create(null, {
            [Symbol.toStringTag]: {
                value: "Module"
            }
        });
        if (e) {
            for (let s in e)
                if ("default" !== s) {
                    let o = Object.getOwnPropertyDescriptor(e, s);
                    Object.defineProperty(i, s, o.get ? o : {
                        enumerable: !0,
                        get: () => e[s]
                    })
                }
        }
        return i.default = e,
        Object.freeze(i)
    }(t)
      , i = new Map
      , s = {
        set(t, e, s) {
            i.has(t) || i.set(t, new Map);
            let o = i.get(t);
            o.has(e) || 0 === o.size ? o.set(e, s) : console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(o.keys())[0]}.`)
        },
        get: (t, e) => i.has(t) && i.get(t).get(e) || null,
        remove(t, e) {
            if (!i.has(t))
                return;
            let s = i.get(t);
            s.delete(e),
            0 === s.size && i.delete(t)
        }
    }
      , o = "transitionend"
      , n = t => (t && window.CSS && window.CSS.escape && (t = t.replace(/#([^\s"#']+)/g, (t, e) => `#${CSS.escape(e)}`)),
    t)
      , r = t => {
        t.dispatchEvent(new Event(o))
    }
      , a = t => !(!t || "object" != typeof t) && (void 0 !== t.jquery && (t = t[0]),
    void 0 !== t.nodeType)
      , l = t => a(t) ? t.jquery ? t[0] : t : "string" == typeof t && t.length > 0 ? document.querySelector(n(t)) : null
      , c = t => {
        if (!a(t) || 0 === t.getClientRects().length)
            return !1;
        let e = "visible" === getComputedStyle(t).getPropertyValue("visibility")
          , i = t.closest("details:not([open])");
        if (!i)
            return e;
        if (i !== t) {
            let s = t.closest("summary");
            if (s && s.parentNode !== i || null === s)
                return !1
        }
        return e
    }
      , d = t => !t || t.nodeType !== Node.ELEMENT_NODE || !!t.classList.contains("disabled") || (void 0 !== t.disabled ? t.disabled : t.hasAttribute("disabled") && "false" !== t.getAttribute("disabled"))
      , h = t => {
        if (!document.documentElement.attachShadow)
            return null;
        if ("function" == typeof t.getRootNode) {
            let e = t.getRootNode();
            return e instanceof ShadowRoot ? e : null
        }
        return t instanceof ShadowRoot ? t : t.parentNode ? h(t.parentNode) : null
    }
      , u = () => {}
      , p = t => {
        t.offsetHeight
    }
      , f = () => window.jQuery && !document.body.hasAttribute("data-bs-no-jquery") ? window.jQuery : null
      , g = []
      , m = () => "rtl" === document.documentElement.dir
      , b = t => {
        var e;
        e = () => {
            let e = f();
            if (e) {
                let i = t.NAME
                  , s = e.fn[i];
                e.fn[i] = t.jQueryInterface,
                e.fn[i].Constructor = t,
                e.fn[i].noConflict = () => (e.fn[i] = s,
                t.jQueryInterface)
            }
        }
        ,
        "loading" === document.readyState ? (g.length || document.addEventListener("DOMContentLoaded", () => {
            for (let t of g)
                t()
        }
        ),
        g.push(e)) : e()
    }
      , v = (t, e=[], i=t) => "function" == typeof t ? t(...e) : i
      , y = (t, e, i=!0) => {
        if (!i)
            return void v(t);
        let s = (t => {
            if (!t)
                return 0;
            let {transitionDuration: e, transitionDelay: i} = window.getComputedStyle(t)
              , s = Number.parseFloat(e)
              , o = Number.parseFloat(i);
            return s || o ? (e = e.split(",")[0],
            i = i.split(",")[0],
            1e3 * (Number.parseFloat(e) + Number.parseFloat(i))) : 0
        }
        )(e) + 5
          , n = !1
          , a = ({target: i}) => {
            i === e && (n = !0,
            e.removeEventListener(o, a),
            v(t))
        }
        ;
        e.addEventListener(o, a),
        setTimeout( () => {
            n || r(e)
        }
        , s)
    }
      , $ = (t, e, i, s) => {
        let o = t.length
          , n = t.indexOf(e);
        return -1 === n ? !i && s ? t[o - 1] : t[0] : (n += i ? 1 : -1,
        s && (n = (n + o) % o),
        t[Math.max(0, Math.min(n, o - 1))])
    }
      , w = /[^.]*(?=\..*)\.|.*/
      , _ = /\..*/
      , x = /::\d+$/
      , k = {}
      , S = 1
      , T = {
        mouseenter: "mouseover",
        mouseleave: "mouseout"
    }
      , C = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel", "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend", "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend", "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel", "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select", "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move", "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"]);
    function A(t, e) {
        return e && `${e}::${S++}` || t.uidEvent || S++
    }
    function E(t) {
        let e = A(t);
        return t.uidEvent = e,
        k[e] = k[e] || {},
        k[e]
    }
    function P(t, e, i=null) {
        return Object.values(t).find(t => t.callable === e && t.delegationSelector === i)
    }
    function L(t, e, i) {
        let s = "string" == typeof e
          , o = z(t);
        return C.has(o) || (o = t),
        [s, s ? i : e || i, o]
    }
    function O(t, e, i, s, o) {
        var n, r, a, l, c, d;
        if ("string" != typeof e || !t)
            return;
        let[h,u,p] = L(e, i, s);
        e in T && (u = (n = u,
        function(t) {
            if (!t.relatedTarget || t.relatedTarget !== t.delegateTarget && !t.delegateTarget.contains(t.relatedTarget))
                return n.call(this, t)
        }
        ));
        let f = E(t)
          , g = f[p] || (f[p] = {})
          , m = P(g, u, h ? i : null);
        if (m)
            return void (m.oneOff = m.oneOff && o);
        let b = A(u, e.replace(w, ""))
          , v = h ? (r = t,
        a = i,
        l = u,
        function t(e) {
            let i = r.querySelectorAll(a);
            for (let {target: s} = e; s && s !== this; s = s.parentNode)
                for (let o of i)
                    if (o === s)
                        return M(e, {
                            delegateTarget: s
                        }),
                        t.oneOff && H.off(r, e.type, a, l),
                        l.apply(s, [e])
        }
        ) : (c = t,
        d = u,
        function t(e) {
            return M(e, {
                delegateTarget: c
            }),
            t.oneOff && H.off(c, e.type, d),
            d.apply(c, [e])
        }
        );
        v.delegationSelector = h ? i : null,
        v.callable = u,
        v.oneOff = o,
        v.uidEvent = b,
        g[b] = v,
        t.addEventListener(p, v, h)
    }
    function I(t, e, i, s, o) {
        let n = P(e[i], s, o);
        n && (t.removeEventListener(i, n, Boolean(o)),
        delete e[i][n.uidEvent])
    }
    function D(t, e, i, s) {
        let o = e[i] || {};
        for (let[n,r] of Object.entries(o))
            n.includes(s) && I(t, e, i, r.callable, r.delegationSelector)
    }
    function z(t) {
        return T[t = t.replace(_, "")] || t
    }
    let H = {
        on(t, e, i, s) {
            O(t, e, i, s, !1)
        },
        one(t, e, i, s) {
            O(t, e, i, s, !0)
        },
        off(t, e, i, s) {
            if ("string" != typeof e || !t)
                return;
            let[o,n,r] = L(e, i, s)
              , a = r !== e
              , l = E(t)
              , c = l[r] || {}
              , d = e.startsWith(".");
            if (void 0 === n) {
                if (d)
                    for (let h of Object.keys(l))
                        D(t, l, h, e.slice(1));
                for (let[u,p] of Object.entries(c)) {
                    let f = u.replace(x, "");
                    a && !e.includes(f) || I(t, l, r, p.callable, p.delegationSelector)
                }
            } else {
                if (!Object.keys(c).length)
                    return;
                I(t, l, r, n, o ? i : null)
            }
        },
        trigger(t, e, i) {
            if ("string" != typeof e || !t)
                return null;
            let s = f()
              , o = null
              , n = !0
              , r = !0
              , a = !1;
            e !== z(e) && s && (o = s.Event(e, i),
            s(t).trigger(o),
            n = !o.isPropagationStopped(),
            r = !o.isImmediatePropagationStopped(),
            a = o.isDefaultPrevented());
            let l = M(new Event(e,{
                bubbles: n,
                cancelable: !0
            }), i);
            return a && l.preventDefault(),
            r && t.dispatchEvent(l),
            l.defaultPrevented && o && o.preventDefault(),
            l
        }
    };
    function M(t, e={}) {
        for (let[i,s] of Object.entries(e))
            try {
                t[i] = s
            } catch (o) {
                Object.defineProperty(t, i, {
                    configurable: !0,
                    get: () => s
                })
            }
        return t
    }
    function F(t) {
        if ("true" === t)
            return !0;
        if ("false" === t)
            return !1;
        if (t === Number(t).toString())
            return Number(t);
        if ("" === t || "null" === t)
            return null;
        if ("string" != typeof t)
            return t;
        try {
            return JSON.parse(decodeURIComponent(t))
        } catch (e) {
            return t
        }
    }
    function j(t) {
        return t.replace(/[A-Z]/g, t => `-${t.toLowerCase()}`)
    }
    let N = {
        setDataAttribute(t, e, i) {
            t.setAttribute(`data-bs-${j(e)}`, i)
        },
        removeDataAttribute(t, e) {
            t.removeAttribute(`data-bs-${j(e)}`)
        },
        getDataAttributes(t) {
            if (!t)
                return {};
            let e = {}
              , i = Object.keys(t.dataset).filter(t => t.startsWith("bs") && !t.startsWith("bsConfig"));
            for (let s of i) {
                let o = s.replace(/^bs/, "");
                e[o = o.charAt(0).toLowerCase() + o.slice(1, o.length)] = F(t.dataset[s])
            }
            return e
        },
        getDataAttribute: (t, e) => F(t.getAttribute(`data-bs-${j(e)}`))
    };
    class q {
        static get Default() {
            return {}
        }
        static get DefaultType() {
            return {}
        }
        static get NAME() {
            throw Error('You have to implement the static method "NAME", for each component!')
        }
        _getConfig(t) {
            return t = this._mergeConfigObj(t),
            t = this._configAfterMerge(t),
            this._typeCheckConfig(t),
            t
        }
        _configAfterMerge(t) {
            return t
        }
        _mergeConfigObj(t, e) {
            let i = a(e) ? N.getDataAttribute(e, "config") : {};
            return {
                ...this.constructor.Default,
                ..."object" == typeof i ? i : {},
                ...a(e) ? N.getDataAttributes(e) : {},
                ..."object" == typeof t ? t : {}
            }
        }
        _typeCheckConfig(t, e=this.constructor.DefaultType) {
            var i;
            for (let[s,o] of Object.entries(e)) {
                let n = t[s]
                  , r = a(n) ? "element" : null == (i = n) ? `${i}` : Object.prototype.toString.call(i).match(/\s([a-z]+)/i)[1].toLowerCase();
                if (!RegExp(o).test(r))
                    throw TypeError(`${this.constructor.NAME.toUpperCase()}: Option "${s}" provided type "${r}" but expected type "${o}".`)
            }
        }
    }
    class W extends q {
        constructor(t, e) {
            super(),
            (t = l(t)) && (this._element = t,
            this._config = this._getConfig(e),
            s.set(this._element, this.constructor.DATA_KEY, this))
        }
        dispose() {
            for (let t of (s.remove(this._element, this.constructor.DATA_KEY),
            H.off(this._element, this.constructor.EVENT_KEY),
            Object.getOwnPropertyNames(this)))
                this[t] = null
        }
        _queueCallback(t, e, i=!0) {
            y(t, e, i)
        }
        _getConfig(t) {
            return t = this._mergeConfigObj(t, this._element),
            t = this._configAfterMerge(t),
            this._typeCheckConfig(t),
            t
        }
        static getInstance(t) {
            return s.get(l(t), this.DATA_KEY)
        }
        static getOrCreateInstance(t, e={}) {
            return this.getInstance(t) || new this(t,"object" == typeof e ? e : null)
        }
        static get VERSION() {
            return "5.3.1"
        }
        static get DATA_KEY() {
            return `bs.${this.NAME}`
        }
        static get EVENT_KEY() {
            return `.${this.DATA_KEY}`
        }
        static eventName(t) {
            return `${t}${this.EVENT_KEY}`
        }
    }
    let R = t => {
        let e = t.getAttribute("data-bs-target");
        if (!e || "#" === e) {
            let i = t.getAttribute("href");
            if (!i || !i.includes("#") && !i.startsWith("."))
                return null;
            i.includes("#") && !i.startsWith("#") && (i = `#${i.split("#")[1]}`),
            e = i && "#" !== i ? i.trim() : null
        }
        return n(e)
    }
      , B = {
        find: (t, e=document.documentElement) => [].concat(...Element.prototype.querySelectorAll.call(e, t)),
        findOne: (t, e=document.documentElement) => Element.prototype.querySelector.call(e, t),
        children: (t, e) => [].concat(...t.children).filter(t => t.matches(e)),
        parents(t, e) {
            let i = []
              , s = t.parentNode.closest(e);
            for (; s; )
                i.push(s),
                s = s.parentNode.closest(e);
            return i
        },
        prev(t, e) {
            let i = t.previousElementSibling;
            for (; i; ) {
                if (i.matches(e))
                    return [i];
                i = i.previousElementSibling
            }
            return []
        },
        next(t, e) {
            let i = t.nextElementSibling;
            for (; i; ) {
                if (i.matches(e))
                    return [i];
                i = i.nextElementSibling
            }
            return []
        },
        focusableChildren(t) {
            let e = ["a", "button", "input", "textarea", "select", "details", "[tabindex]", '[contenteditable="true"]'].map(t => `${t}:not([tabindex^="-"])`).join(",");
            return this.find(e, t).filter(t => !d(t) && c(t))
        },
        getSelectorFromElement(t) {
            let e = R(t);
            return e && B.findOne(e) ? e : null
        },
        getElementFromSelector(t) {
            let e = R(t);
            return e ? B.findOne(e) : null
        },
        getMultipleElementsFromSelector(t) {
            let e = R(t);
            return e ? B.find(e) : []
        }
    }
      , X = (t, e="hide") => {
        let i = `click.dismiss${t.EVENT_KEY}`
          , s = t.NAME;
        H.on(document, i, `[data-bs-dismiss="${s}"]`, function(i) {
            if (["A", "AREA"].includes(this.tagName) && i.preventDefault(),
            d(this))
                return;
            let o = B.getElementFromSelector(this) || this.closest(`.${s}`);
            t.getOrCreateInstance(o)[e]()
        })
    }
      , Y = ".bs.alert"
      , V = `close${Y}`
      , U = `closed${Y}`;
    class K extends W {
        static get NAME() {
            return "alert"
        }
        close() {
            if (H.trigger(this._element, V).defaultPrevented)
                return;
            this._element.classList.remove("show");
            let t = this._element.classList.contains("fade");
            this._queueCallback( () => this._destroyElement(), this._element, t)
        }
        _destroyElement() {
            this._element.remove(),
            H.trigger(this._element, U),
            this.dispose()
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = K.getOrCreateInstance(this);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                        throw TypeError(`No method named "${t}"`);
                    e[t](this)
                }
            })
        }
    }
    X(K, "close"),
    b(K);
    let Z = '[data-bs-toggle="button"]';
    class Q extends W {
        static get NAME() {
            return "button"
        }
        toggle() {
            this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"))
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = Q.getOrCreateInstance(this);
                "toggle" === t && e[t]()
            })
        }
    }
    H.on(document, "click.bs.button.data-api", Z, t => {
        t.preventDefault();
        let e = t.target.closest(Z);
        Q.getOrCreateInstance(e).toggle()
    }
    ),
    b(Q);
    let G = ".bs.swipe"
      , J = `touchstart${G}`
      , tt = `touchmove${G}`
      , te = `touchend${G}`
      , ti = `pointerdown${G}`
      , ts = `pointerup${G}`
      , to = {
        endCallback: null,
        leftCallback: null,
        rightCallback: null
    }
      , tn = {
        endCallback: "(function|null)",
        leftCallback: "(function|null)",
        rightCallback: "(function|null)"
    };
    class tr extends q {
        constructor(t, e) {
            super(),
            this._element = t,
            t && tr.isSupported() && (this._config = this._getConfig(e),
            this._deltaX = 0,
            this._supportPointerEvents = Boolean(window.PointerEvent),
            this._initEvents())
        }
        static get Default() {
            return to
        }
        static get DefaultType() {
            return tn
        }
        static get NAME() {
            return "swipe"
        }
        dispose() {
            H.off(this._element, G)
        }
        _start(t) {
            this._supportPointerEvents ? this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX) : this._deltaX = t.touches[0].clientX
        }
        _end(t) {
            this._eventIsPointerPenTouch(t) && (this._deltaX = t.clientX - this._deltaX),
            this._handleSwipe(),
            v(this._config.endCallback)
        }
        _move(t) {
            this._deltaX = t.touches && t.touches.length > 1 ? 0 : t.touches[0].clientX - this._deltaX
        }
        _handleSwipe() {
            let t = Math.abs(this._deltaX);
            if (t <= 40)
                return;
            let e = t / this._deltaX;
            this._deltaX = 0,
            e && v(e > 0 ? this._config.rightCallback : this._config.leftCallback)
        }
        _initEvents() {
            this._supportPointerEvents ? (H.on(this._element, ti, t => this._start(t)),
            H.on(this._element, ts, t => this._end(t)),
            this._element.classList.add("pointer-event")) : (H.on(this._element, J, t => this._start(t)),
            H.on(this._element, tt, t => this._move(t)),
            H.on(this._element, te, t => this._end(t)))
        }
        _eventIsPointerPenTouch(t) {
            return this._supportPointerEvents && ("pen" === t.pointerType || "touch" === t.pointerType)
        }
        static isSupported() {
            return "ontouchstart"in document.documentElement || navigator.maxTouchPoints > 0
        }
    }
    let ta = ".bs.carousel"
      , tl = ".data-api"
      , tc = "next"
      , td = "prev"
      , th = "left"
      , tu = "right"
      , tp = `slide${ta}`
      , tf = `slid${ta}`
      , tg = `keydown${ta}`
      , tm = `mouseenter${ta}`
      , tb = `mouseleave${ta}`
      , tv = `dragstart${ta}`
      , ty = `load${ta}${tl}`
      , t$ = `click${ta}${tl}`
      , tw = "carousel"
      , t8 = "active"
      , t_ = ".active"
      , tx = ".carousel-item"
      , tk = t_ + tx
      , t9 = {
        ArrowLeft: tu,
        ArrowRight: th
    }
      , tS = {
        interval: 5e3,
        keyboard: !0,
        pause: "hover",
        ride: !1,
        touch: !0,
        wrap: !0
    }
      , tT = {
        interval: "(number|boolean)",
        keyboard: "boolean",
        pause: "(string|boolean)",
        ride: "(boolean|string)",
        touch: "boolean",
        wrap: "boolean"
    };
    class tC extends W {
        constructor(t, e) {
            super(t, e),
            this._interval = null,
            this._activeElement = null,
            this._isSliding = !1,
            this.touchTimeout = null,
            this._swipeHelper = null,
            this._indicatorsElement = B.findOne(".carousel-indicators", this._element),
            this._addEventListeners(),
            this._config.ride === tw && this.cycle()
        }
        static get Default() {
            return tS
        }
        static get DefaultType() {
            return tT
        }
        static get NAME() {
            return "carousel"
        }
        next() {
            this._slide(tc)
        }
        nextWhenVisible() {
            !document.hidden && c(this._element) && this.next()
        }
        prev() {
            this._slide(td)
        }
        pause() {
            this._isSliding && r(this._element),
            this._clearInterval()
        }
        cycle() {
            this._clearInterval(),
            this._updateInterval(),
            this._interval = setInterval( () => this.nextWhenVisible(), this._config.interval)
        }
        _maybeEnableCycle() {
            this._config.ride && (this._isSliding ? H.one(this._element, tf, () => this.cycle()) : this.cycle())
        }
        to(t) {
            let e = this._getItems();
            if (t > e.length - 1 || t < 0)
                return;
            if (this._isSliding)
                return void H.one(this._element, tf, () => this.to(t));
            let i = this._getItemIndex(this._getActive());
            i !== t && this._slide(t > i ? tc : td, e[t])
        }
        dispose() {
            this._swipeHelper && this._swipeHelper.dispose(),
            super.dispose()
        }
        _configAfterMerge(t) {
            return t.defaultInterval = t.interval,
            t
        }
        _addEventListeners() {
            this._config.keyboard && H.on(this._element, tg, t => this._keydown(t)),
            "hover" === this._config.pause && (H.on(this._element, tm, () => this.pause()),
            H.on(this._element, tb, () => this._maybeEnableCycle())),
            this._config.touch && tr.isSupported() && this._addTouchEventListeners()
        }
        _addTouchEventListeners() {
            for (let t of B.find(".carousel-item img", this._element))
                H.on(t, tv, t => t.preventDefault());
            this._swipeHelper = new tr(this._element,{
                leftCallback: () => this._slide(this._directionToOrder(th)),
                rightCallback: () => this._slide(this._directionToOrder(tu)),
                endCallback: () => {
                    "hover" === this._config.pause && (this.pause(),
                    this.touchTimeout && clearTimeout(this.touchTimeout),
                    this.touchTimeout = setTimeout( () => this._maybeEnableCycle(), 500 + this._config.interval))
                }
            })
        }
        _keydown(t) {
            if (/input|textarea/i.test(t.target.tagName))
                return;
            let e = t9[t.key];
            e && (t.preventDefault(),
            this._slide(this._directionToOrder(e)))
        }
        _getItemIndex(t) {
            return this._getItems().indexOf(t)
        }
        _setActiveIndicatorElement(t) {
            if (!this._indicatorsElement)
                return;
            let e = B.findOne(t_, this._indicatorsElement);
            e.classList.remove(t8),
            e.removeAttribute("aria-current");
            let i = B.findOne(`[data-bs-slide-to="${t}"]`, this._indicatorsElement);
            i && (i.classList.add(t8),
            i.setAttribute("aria-current", "true"))
        }
        _updateInterval() {
            let t = this._activeElement || this._getActive();
            if (!t)
                return;
            let e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
            this._config.interval = e || this._config.defaultInterval
        }
        _slide(t, e=null) {
            if (this._isSliding)
                return;
            let i = this._getActive()
              , s = t === tc
              , o = e || $(this._getItems(), i, s, this._config.wrap);
            if (o === i)
                return;
            let n = this._getItemIndex(o)
              , r = e => H.trigger(this._element, e, {
                relatedTarget: o,
                direction: this._orderToDirection(t),
                from: this._getItemIndex(i),
                to: n
            });
            if (r(tp).defaultPrevented || !i || !o)
                return;
            let a = Boolean(this._interval);
            this.pause(),
            this._isSliding = !0,
            this._setActiveIndicatorElement(n),
            this._activeElement = o;
            let l = s ? "carousel-item-start" : "carousel-item-end"
              , c = s ? "carousel-item-next" : "carousel-item-prev";
            o.classList.add(c),
            p(o),
            i.classList.add(l),
            o.classList.add(l),
            this._queueCallback( () => {
                o.classList.remove(l, c),
                o.classList.add(t8),
                i.classList.remove(t8, c, l),
                this._isSliding = !1,
                r(tf)
            }
            , i, this._isAnimated()),
            a && this.cycle()
        }
        _isAnimated() {
            return this._element.classList.contains("slide")
        }
        _getActive() {
            return B.findOne(tk, this._element)
        }
        _getItems() {
            return B.find(tx, this._element)
        }
        _clearInterval() {
            this._interval && (clearInterval(this._interval),
            this._interval = null)
        }
        _directionToOrder(t) {
            return m() ? t === th ? td : tc : t === th ? tc : td
        }
        _orderToDirection(t) {
            return m() ? t === td ? th : tu : t === td ? tu : th
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = tC.getOrCreateInstance(this, t);
                if ("number" != typeof t) {
                    if ("string" == typeof t) {
                        if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                            throw TypeError(`No method named "${t}"`);
                        e[t]()
                    }
                } else
                    e.to(t)
            })
        }
    }
    H.on(document, t$, "[data-bs-slide], [data-bs-slide-to]", function(t) {
        let e = B.getElementFromSelector(this);
        if (!e || !e.classList.contains(tw))
            return;
        t.preventDefault();
        let i = tC.getOrCreateInstance(e)
          , s = this.getAttribute("data-bs-slide-to");
        return s ? (i.to(s),
        void i._maybeEnableCycle()) : "next" === N.getDataAttribute(this, "slide") ? (i.next(),
        void i._maybeEnableCycle()) : (i.prev(),
        void i._maybeEnableCycle())
    }),
    H.on(window, ty, () => {
        let t = B.find('[data-bs-ride="carousel"]');
        for (let e of t)
            tC.getOrCreateInstance(e)
    }
    ),
    b(tC);
    let tA = ".bs.collapse"
      , tE = `show${tA}`
      , tP = `shown${tA}`
      , tL = `hide${tA}`
      , t0 = `hidden${tA}`
      , t3 = `click${tA}.data-api`
      , tO = "show"
      , tI = "collapse"
      , t1 = "collapsing"
      , tD = `:scope .${tI} .${tI}`
      , tz = '[data-bs-toggle="collapse"]'
      , tH = {
        parent: null,
        toggle: !0
    }
      , t2 = {
        parent: "(null|element)",
        toggle: "boolean"
    };
    class tM extends W {
        constructor(t, e) {
            super(t, e),
            this._isTransitioning = !1,
            this._triggerArray = [];
            let i = B.find(tz);
            for (let s of i) {
                let o = B.getSelectorFromElement(s)
                  , n = B.find(o).filter(t => t === this._element);
                null !== o && n.length && this._triggerArray.push(s)
            }
            this._initializeChildren(),
            this._config.parent || this._addAriaAndCollapsedClass(this._triggerArray, this._isShown()),
            this._config.toggle && this.toggle()
        }
        static get Default() {
            return tH
        }
        static get DefaultType() {
            return t2
        }
        static get NAME() {
            return "collapse"
        }
        toggle() {
            this._isShown() ? this.hide() : this.show()
        }
        show() {
            if (this._isTransitioning || this._isShown())
                return;
            let t = [];
            if (this._config.parent && (t = this._getFirstLevelChildren(".collapse.show, .collapse.collapsing").filter(t => t !== this._element).map(t => tM.getOrCreateInstance(t, {
                toggle: !1
            }))),
            t.length && t[0]._isTransitioning || H.trigger(this._element, tE).defaultPrevented)
                return;
            for (let e of t)
                e.hide();
            let i = this._getDimension();
            this._element.classList.remove(tI),
            this._element.classList.add(t1),
            this._element.style[i] = 0,
            this._addAriaAndCollapsedClass(this._triggerArray, !0),
            this._isTransitioning = !0;
            let s = `scroll${i[0].toUpperCase() + i.slice(1)}`;
            this._queueCallback( () => {
                this._isTransitioning = !1,
                this._element.classList.remove(t1),
                this._element.classList.add(tI, tO),
                this._element.style[i] = "",
                H.trigger(this._element, tP)
            }
            , this._element, !0),
            this._element.style[i] = `${this._element[s]}px`
        }
        hide() {
            if (this._isTransitioning || !this._isShown() || H.trigger(this._element, tL).defaultPrevented)
                return;
            let t = this._getDimension();
            for (let e of (this._element.style[t] = `${this._element.getBoundingClientRect()[t]}px`,
            p(this._element),
            this._element.classList.add(t1),
            this._element.classList.remove(tI, tO),
            this._triggerArray)) {
                let i = B.getElementFromSelector(e);
                i && !this._isShown(i) && this._addAriaAndCollapsedClass([e], !1)
            }
            this._isTransitioning = !0,
            this._element.style[t] = "",
            this._queueCallback( () => {
                this._isTransitioning = !1,
                this._element.classList.remove(t1),
                this._element.classList.add(tI),
                H.trigger(this._element, t0)
            }
            , this._element, !0)
        }
        _isShown(t=this._element) {
            return t.classList.contains(tO)
        }
        _configAfterMerge(t) {
            return t.toggle = Boolean(t.toggle),
            t.parent = l(t.parent),
            t
        }
        _getDimension() {
            return this._element.classList.contains("collapse-horizontal") ? "width" : "height"
        }
        _initializeChildren() {
            if (!this._config.parent)
                return;
            let t = this._getFirstLevelChildren(tz);
            for (let e of t) {
                let i = B.getElementFromSelector(e);
                i && this._addAriaAndCollapsedClass([e], this._isShown(i))
            }
        }
        _getFirstLevelChildren(t) {
            let e = B.find(tD, this._config.parent);
            return B.find(t, this._config.parent).filter(t => !e.includes(t))
        }
        _addAriaAndCollapsedClass(t, e) {
            if (t.length)
                for (let i of t)
                    i.classList.toggle("collapsed", !e),
                    i.setAttribute("aria-expanded", e)
        }
        static jQueryInterface(t) {
            let e = {};
            return "string" == typeof t && /show|hide/.test(t) && (e.toggle = !1),
            this.each(function() {
                let i = tM.getOrCreateInstance(this, e);
                if ("string" == typeof t) {
                    if (void 0 === i[t])
                        throw TypeError(`No method named "${t}"`);
                    i[t]()
                }
            })
        }
    }
    H.on(document, t3, tz, function(t) {
        for (let e of (("A" === t.target.tagName || t.delegateTarget && "A" === t.delegateTarget.tagName) && t.preventDefault(),
        B.getMultipleElementsFromSelector(this)))
            tM.getOrCreateInstance(e, {
                toggle: !1
            }).toggle()
    }),
    b(tM);
    let tF = "dropdown"
      , tj = ".bs.dropdown"
      , tN = ".data-api"
      , t4 = "ArrowDown"
      , t5 = `hide${tj}`
      , tq = `hidden${tj}`
      , t6 = `show${tj}`
      , tW = `shown${tj}`
      , tR = `click${tj}${tN}`
      , tB = `keydown${tj}${tN}`
      , t7 = `keyup${tj}${tN}`
      , tX = "show"
      , tY = '[data-bs-toggle="dropdown"]:not(.disabled):not(:disabled)'
      , tV = `${tY}.${tX}`
      , tU = ".dropdown-menu"
      , tK = m() ? "top-end" : "top-start"
      , tZ = m() ? "top-start" : "top-end"
      , tQ = m() ? "bottom-end" : "bottom-start"
      , tG = m() ? "bottom-start" : "bottom-end"
      , tJ = m() ? "left-start" : "right-start"
      , et = m() ? "right-start" : "left-start"
      , ee = {
        autoClose: !0,
        boundary: "clippingParents",
        display: "dynamic",
        offset: [0, 2],
        popperConfig: null,
        reference: "toggle"
    }
      , ei = {
        autoClose: "(boolean|string)",
        boundary: "(string|element)",
        display: "string",
        offset: "(array|string|function)",
        popperConfig: "(null|object|function)",
        reference: "(string|element|object)"
    };
    class es extends W {
        constructor(t, e) {
            super(t, e),
            this._popper = null,
            this._parent = this._element.parentNode,
            this._menu = B.next(this._element, tU)[0] || B.prev(this._element, tU)[0] || B.findOne(tU, this._parent),
            this._inNavbar = this._detectNavbar()
        }
        static get Default() {
            return ee
        }
        static get DefaultType() {
            return ei
        }
        static get NAME() {
            return tF
        }
        toggle() {
            return this._isShown() ? this.hide() : this.show()
        }
        show() {
            if (d(this._element) || this._isShown())
                return;
            let t = {
                relatedTarget: this._element
            };
            if (!H.trigger(this._element, t6, t).defaultPrevented) {
                if (this._createPopper(),
                "ontouchstart"in document.documentElement && !this._parent.closest(".navbar-nav"))
                    for (let e of [].concat(...document.body.children))
                        H.on(e, "mouseover", u);
                this._element.focus(),
                this._element.setAttribute("aria-expanded", !0),
                this._menu.classList.add(tX),
                this._element.classList.add(tX),
                H.trigger(this._element, tW, t)
            }
        }
        hide() {
            if (d(this._element) || !this._isShown())
                return;
            let t = {
                relatedTarget: this._element
            };
            this._completeHide(t)
        }
        dispose() {
            this._popper && this._popper.destroy(),
            super.dispose()
        }
        update() {
            this._inNavbar = this._detectNavbar(),
            this._popper && this._popper.update()
        }
        _completeHide(t) {
            if (!H.trigger(this._element, t5, t).defaultPrevented) {
                if ("ontouchstart"in document.documentElement)
                    for (let e of [].concat(...document.body.children))
                        H.off(e, "mouseover", u);
                this._popper && this._popper.destroy(),
                this._menu.classList.remove(tX),
                this._element.classList.remove(tX),
                this._element.setAttribute("aria-expanded", "false"),
                N.removeDataAttribute(this._menu, "popper"),
                H.trigger(this._element, tq, t)
            }
        }
        _getConfig(t) {
            if ("object" == typeof (t = super._getConfig(t)).reference && !a(t.reference) && "function" != typeof t.reference.getBoundingClientRect)
                throw TypeError(`${tF.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`);
            return t
        }
        _createPopper() {
            if (void 0 === e)
                throw TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
            let t = this._element;
            "parent" === this._config.reference ? t = this._parent : a(this._config.reference) ? t = l(this._config.reference) : "object" == typeof this._config.reference && (t = this._config.reference);
            let i = this._getPopperConfig();
            this._popper = e.createPopper(t, this._menu, i)
        }
        _isShown() {
            return this._menu.classList.contains(tX)
        }
        _getPlacement() {
            let t = this._parent;
            if (t.classList.contains("dropend"))
                return tJ;
            if (t.classList.contains("dropstart"))
                return et;
            if (t.classList.contains("dropup-center"))
                return "top";
            if (t.classList.contains("dropdown-center"))
                return "bottom";
            let e = "end" === getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();
            return t.classList.contains("dropup") ? e ? tZ : tK : e ? tG : tQ
        }
        _detectNavbar() {
            return null !== this._element.closest(".navbar")
        }
        _getOffset() {
            let {offset: t} = this._config;
            return "string" == typeof t ? t.split(",").map(t => Number.parseInt(t, 10)) : "function" == typeof t ? e => t(e, this._element) : t
        }
        _getPopperConfig() {
            let t = {
                placement: this._getPlacement(),
                modifiers: [{
                    name: "preventOverflow",
                    options: {
                        boundary: this._config.boundary
                    }
                }, {
                    name: "offset",
                    options: {
                        offset: this._getOffset()
                    }
                }]
            };
            return (this._inNavbar || "static" === this._config.display) && (N.setDataAttribute(this._menu, "popper", "static"),
            t.modifiers = [{
                name: "applyStyles",
                enabled: !1
            }]),
            {
                ...t,
                ...v(this._config.popperConfig, [t])
            }
        }
        _selectMenuItem({key: t, target: e}) {
            let i = B.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", this._menu).filter(t => c(t));
            i.length && $(i, e, t === t4, !i.includes(e)).focus()
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = es.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw TypeError(`No method named "${t}"`);
                    e[t]()
                }
            })
        }
        static clearMenus(t) {
            if (2 === t.button || "keyup" === t.type && "Tab" !== t.key)
                return;
            let e = B.find(tV);
            for (let i of e) {
                let s = es.getInstance(i);
                if (!s || !1 === s._config.autoClose)
                    continue;
                let o = t.composedPath()
                  , n = o.includes(s._menu);
                if (o.includes(s._element) || "inside" === s._config.autoClose && !n || "outside" === s._config.autoClose && n || s._menu.contains(t.target) && ("keyup" === t.type && "Tab" === t.key || /input|select|option|textarea|form/i.test(t.target.tagName)))
                    continue;
                let r = {
                    relatedTarget: s._element
                };
                "click" === t.type && (r.clickEvent = t),
                s._completeHide(r)
            }
        }
        static dataApiKeydownHandler(t) {
            let e = /input|textarea/i.test(t.target.tagName)
              , i = "Escape" === t.key
              , s = ["ArrowUp", t4].includes(t.key);
            if (!s && !i || e && !i)
                return;
            t.preventDefault();
            let o = this.matches(tY) ? this : B.prev(this, tY)[0] || B.next(this, tY)[0] || B.findOne(tY, t.delegateTarget.parentNode)
              , n = es.getOrCreateInstance(o);
            if (s)
                return t.stopPropagation(),
                n.show(),
                void n._selectMenuItem(t);
            n._isShown() && (t.stopPropagation(),
            n.hide(),
            o.focus())
        }
    }
    H.on(document, tB, tY, es.dataApiKeydownHandler),
    H.on(document, tB, tU, es.dataApiKeydownHandler),
    H.on(document, tR, es.clearMenus),
    H.on(document, t7, es.clearMenus),
    H.on(document, tR, tY, function(t) {
        t.preventDefault(),
        es.getOrCreateInstance(this).toggle()
    }),
    b(es);
    let eo = "backdrop"
      , en = "show"
      , er = `mousedown.bs.${eo}`
      , ea = {
        className: "modal-backdrop",
        clickCallback: null,
        isAnimated: !1,
        isVisible: !0,
        rootElement: "body"
    }
      , el = {
        className: "string",
        clickCallback: "(function|null)",
        isAnimated: "boolean",
        isVisible: "boolean",
        rootElement: "(element|string)"
    };
    class ec extends q {
        constructor(t) {
            super(),
            this._config = this._getConfig(t),
            this._isAppended = !1,
            this._element = null
        }
        static get Default() {
            return ea
        }
        static get DefaultType() {
            return el
        }
        static get NAME() {
            return eo
        }
        show(t) {
            if (!this._config.isVisible)
                return void v(t);
            this._append();
            let e = this._getElement();
            this._config.isAnimated && p(e),
            e.classList.add(en),
            this._emulateAnimation( () => {
                v(t)
            }
            )
        }
        hide(t) {
            this._config.isVisible ? (this._getElement().classList.remove(en),
            this._emulateAnimation( () => {
                this.dispose(),
                v(t)
            }
            )) : v(t)
        }
        dispose() {
            this._isAppended && (H.off(this._element, er),
            this._element.remove(),
            this._isAppended = !1)
        }
        _getElement() {
            if (!this._element) {
                let t = document.createElement("div");
                t.className = this._config.className,
                this._config.isAnimated && t.classList.add("fade"),
                this._element = t
            }
            return this._element
        }
        _configAfterMerge(t) {
            return t.rootElement = l(t.rootElement),
            t
        }
        _append() {
            if (this._isAppended)
                return;
            let t = this._getElement();
            this._config.rootElement.append(t),
            H.on(t, er, () => {
                v(this._config.clickCallback)
            }
            ),
            this._isAppended = !0
        }
        _emulateAnimation(t) {
            y(t, this._getElement(), this._config.isAnimated)
        }
    }
    let ed = ".bs.focustrap"
      , eh = `focusin${ed}`
      , eu = `keydown.tab${ed}`
      , ep = "backward"
      , ef = {
        autofocus: !0,
        trapElement: null
    }
      , eg = {
        autofocus: "boolean",
        trapElement: "element"
    };
    class em extends q {
        constructor(t) {
            super(),
            this._config = this._getConfig(t),
            this._isActive = !1,
            this._lastTabNavDirection = null
        }
        static get Default() {
            return ef
        }
        static get DefaultType() {
            return eg
        }
        static get NAME() {
            return "focustrap"
        }
        activate() {
            this._isActive || (this._config.autofocus && this._config.trapElement.focus(),
            H.off(document, ed),
            H.on(document, eh, t => this._handleFocusin(t)),
            H.on(document, eu, t => this._handleKeydown(t)),
            this._isActive = !0)
        }
        deactivate() {
            this._isActive && (this._isActive = !1,
            H.off(document, ed))
        }
        _handleFocusin(t) {
            let {trapElement: e} = this._config;
            if (t.target === document || t.target === e || e.contains(t.target))
                return;
            let i = B.focusableChildren(e);
            0 === i.length ? e.focus() : this._lastTabNavDirection === ep ? i[i.length - 1].focus() : i[0].focus()
        }
        _handleKeydown(t) {
            "Tab" === t.key && (this._lastTabNavDirection = t.shiftKey ? ep : "forward")
        }
    }
    let eb = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"
      , ev = ".sticky-top"
      , ey = "padding-right"
      , e$ = "margin-right";
    class ew {
        constructor() {
            this._element = document.body
        }
        getWidth() {
            let t = document.documentElement.clientWidth;
            return Math.abs(window.innerWidth - t)
        }
        hide() {
            let t = this.getWidth();
            this._disableOverFlow(),
            this._setElementAttributes(this._element, ey, e => e + t),
            this._setElementAttributes(eb, ey, e => e + t),
            this._setElementAttributes(ev, e$, e => e - t)
        }
        reset() {
            this._resetElementAttributes(this._element, "overflow"),
            this._resetElementAttributes(this._element, ey),
            this._resetElementAttributes(eb, ey),
            this._resetElementAttributes(ev, e$)
        }
        isOverflowing() {
            return this.getWidth() > 0
        }
        _disableOverFlow() {
            this._saveInitialAttribute(this._element, "overflow"),
            this._element.style.overflow = "hidden"
        }
        _setElementAttributes(t, e, i) {
            let s = this.getWidth();
            this._applyManipulationCallback(t, t => {
                if (t !== this._element && window.innerWidth > t.clientWidth + s)
                    return;
                this._saveInitialAttribute(t, e);
                let o = window.getComputedStyle(t).getPropertyValue(e);
                t.style.setProperty(e, `${i(Number.parseFloat(o))}px`)
            }
            )
        }
        _saveInitialAttribute(t, e) {
            let i = t.style.getPropertyValue(e);
            i && N.setDataAttribute(t, e, i)
        }
        _resetElementAttributes(t, e) {
            this._applyManipulationCallback(t, t => {
                let i = N.getDataAttribute(t, e);
                null !== i ? (N.removeDataAttribute(t, e),
                t.style.setProperty(e, i)) : t.style.removeProperty(e)
            }
            )
        }
        _applyManipulationCallback(t, e) {
            if (a(t))
                e(t);
            else
                for (let i of B.find(t, this._element))
                    e(i)
        }
    }
    let e8 = ".bs.modal"
      , e_ = `hide${e8}`
      , ex = `hidePrevented${e8}`
      , ek = `hidden${e8}`
      , e9 = `show${e8}`
      , eS = `shown${e8}`
      , eT = `resize${e8}`
      , eC = `click.dismiss${e8}`
      , eA = `mousedown.dismiss${e8}`
      , eE = `keydown.dismiss${e8}`
      , eP = `click${e8}.data-api`
      , eL = "modal-open"
      , e0 = "show"
      , e3 = "modal-static"
      , eO = {
        backdrop: !0,
        focus: !0,
        keyboard: !0
    }
      , eI = {
        backdrop: "(boolean|string)",
        focus: "boolean",
        keyboard: "boolean"
    };
    class e1 extends W {
        constructor(t, e) {
            super(t, e),
            this._dialog = B.findOne(".modal-dialog", this._element),
            this._backdrop = this._initializeBackDrop(),
            this._focustrap = this._initializeFocusTrap(),
            this._isShown = !1,
            this._isTransitioning = !1,
            this._scrollBar = new ew,
            this._addEventListeners()
        }
        static get Default() {
            return eO
        }
        static get DefaultType() {
            return eI
        }
        static get NAME() {
            return "modal"
        }
        toggle(t) {
            return this._isShown ? this.hide() : this.show(t)
        }
        show(t) {
            this._isShown || this._isTransitioning || H.trigger(this._element, e9, {
                relatedTarget: t
            }).defaultPrevented || (this._isShown = !0,
            this._isTransitioning = !0,
            this._scrollBar.hide(),
            document.body.classList.add(eL),
            this._adjustDialog(),
            this._backdrop.show( () => this._showElement(t)))
        }
        hide() {
            this._isShown && !this._isTransitioning && (H.trigger(this._element, e_).defaultPrevented || (this._isShown = !1,
            this._isTransitioning = !0,
            this._focustrap.deactivate(),
            this._element.classList.remove(e0),
            this._queueCallback( () => this._hideModal(), this._element, this._isAnimated())))
        }
        dispose() {
            H.off(window, e8),
            H.off(this._dialog, e8),
            this._backdrop.dispose(),
            this._focustrap.deactivate(),
            super.dispose()
        }
        handleUpdate() {
            this._adjustDialog()
        }
        _initializeBackDrop() {
            return new ec({
                isVisible: Boolean(this._config.backdrop),
                isAnimated: this._isAnimated()
            })
        }
        _initializeFocusTrap() {
            return new em({
                trapElement: this._element
            })
        }
        _showElement(t) {
            document.body.contains(this._element) || document.body.append(this._element),
            this._element.style.display = "block",
            this._element.removeAttribute("aria-hidden"),
            this._element.setAttribute("aria-modal", !0),
            this._element.setAttribute("role", "dialog"),
            this._element.scrollTop = 0;
            let e = B.findOne(".modal-body", this._dialog);
            e && (e.scrollTop = 0),
            p(this._element),
            this._element.classList.add(e0),
            this._queueCallback( () => {
                this._config.focus && this._focustrap.activate(),
                this._isTransitioning = !1,
                H.trigger(this._element, eS, {
                    relatedTarget: t
                })
            }
            , this._dialog, this._isAnimated())
        }
        _addEventListeners() {
            H.on(this._element, eE, t => {
                "Escape" === t.key && (this._config.keyboard ? this.hide() : this._triggerBackdropTransition())
            }
            ),
            H.on(window, eT, () => {
                this._isShown && !this._isTransitioning && this._adjustDialog()
            }
            ),
            H.on(this._element, eA, t => {
                H.one(this._element, eC, e => {
                    this._element === t.target && this._element === e.target && ("static" !== this._config.backdrop ? this._config.backdrop && this.hide() : this._triggerBackdropTransition())
                }
                )
            }
            )
        }
        _hideModal() {
            this._element.style.display = "none",
            this._element.setAttribute("aria-hidden", !0),
            this._element.removeAttribute("aria-modal"),
            this._element.removeAttribute("role"),
            this._isTransitioning = !1,
            this._backdrop.hide( () => {
                document.body.classList.remove(eL),
                this._resetAdjustments(),
                this._scrollBar.reset(),
                H.trigger(this._element, ek)
            }
            )
        }
        _isAnimated() {
            return this._element.classList.contains("fade")
        }
        _triggerBackdropTransition() {
            if (H.trigger(this._element, ex).defaultPrevented)
                return;
            let t = this._element.scrollHeight > document.documentElement.clientHeight
              , e = this._element.style.overflowY;
            "hidden" === e || this._element.classList.contains(e3) || (t || (this._element.style.overflowY = "hidden"),
            this._element.classList.add(e3),
            this._queueCallback( () => {
                this._element.classList.remove(e3),
                this._queueCallback( () => {
                    this._element.style.overflowY = e
                }
                , this._dialog)
            }
            , this._dialog),
            this._element.focus())
        }
        _adjustDialog() {
            let t = this._element.scrollHeight > document.documentElement.clientHeight
              , e = this._scrollBar.getWidth()
              , i = e > 0;
            if (i && !t) {
                let s = m() ? "paddingLeft" : "paddingRight";
                this._element.style[s] = `${e}px`
            }
            if (!i && t) {
                let o = m() ? "paddingRight" : "paddingLeft";
                this._element.style[o] = `${e}px`
            }
        }
        _resetAdjustments() {
            this._element.style.paddingLeft = "",
            this._element.style.paddingRight = ""
        }
        static jQueryInterface(t, e) {
            return this.each(function() {
                let i = e1.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === i[t])
                        throw TypeError(`No method named "${t}"`);
                    i[t](e)
                }
            })
        }
    }
    H.on(document, eP, '[data-bs-toggle="modal"]', function(t) {
        let e = B.getElementFromSelector(this);
        ["A", "AREA"].includes(this.tagName) && t.preventDefault(),
        H.one(e, e9, t => {
            t.defaultPrevented || H.one(e, ek, () => {
                c(this) && this.focus()
            }
            )
        }
        );
        let i = B.findOne(".modal.show");
        i && e1.getInstance(i).hide(),
        e1.getOrCreateInstance(e).toggle(this)
    }),
    X(e1),
    b(e1);
    let eD = ".bs.offcanvas"
      , ez = ".data-api"
      , eH = `load${eD}${ez}`
      , e2 = "show"
      , eM = "showing"
      , eF = "hiding"
      , ej = ".offcanvas.show"
      , eN = `show${eD}`
      , e4 = `shown${eD}`
      , e5 = `hide${eD}`
      , eq = `hidePrevented${eD}`
      , e6 = `hidden${eD}`
      , eW = `resize${eD}`
      , eR = `click${eD}${ez}`
      , eB = `keydown.dismiss${eD}`
      , e7 = {
        backdrop: !0,
        keyboard: !0,
        scroll: !1
    }
      , eX = {
        backdrop: "(boolean|string)",
        keyboard: "boolean",
        scroll: "boolean"
    };
    class eY extends W {
        constructor(t, e) {
            super(t, e),
            this._isShown = !1,
            this._backdrop = this._initializeBackDrop(),
            this._focustrap = this._initializeFocusTrap(),
            this._addEventListeners()
        }
        static get Default() {
            return e7
        }
        static get DefaultType() {
            return eX
        }
        static get NAME() {
            return "offcanvas"
        }
        toggle(t) {
            return this._isShown ? this.hide() : this.show(t)
        }
        show(t) {
            this._isShown || H.trigger(this._element, eN, {
                relatedTarget: t
            }).defaultPrevented || (this._isShown = !0,
            this._backdrop.show(),
            this._config.scroll || (new ew).hide(),
            this._element.setAttribute("aria-modal", !0),
            this._element.setAttribute("role", "dialog"),
            this._element.classList.add(eM),
            this._queueCallback( () => {
                this._config.scroll && !this._config.backdrop || this._focustrap.activate(),
                this._element.classList.add(e2),
                this._element.classList.remove(eM),
                H.trigger(this._element, e4, {
                    relatedTarget: t
                })
            }
            , this._element, !0))
        }
        hide() {
            this._isShown && (H.trigger(this._element, e5).defaultPrevented || (this._focustrap.deactivate(),
            this._element.blur(),
            this._isShown = !1,
            this._element.classList.add(eF),
            this._backdrop.hide(),
            this._queueCallback( () => {
                this._element.classList.remove(e2, eF),
                this._element.removeAttribute("aria-modal"),
                this._element.removeAttribute("role"),
                this._config.scroll || (new ew).reset(),
                H.trigger(this._element, e6)
            }
            , this._element, !0)))
        }
        dispose() {
            this._backdrop.dispose(),
            this._focustrap.deactivate(),
            super.dispose()
        }
        _initializeBackDrop() {
            let t = Boolean(this._config.backdrop);
            return new ec({
                className: "offcanvas-backdrop",
                isVisible: t,
                isAnimated: !0,
                rootElement: this._element.parentNode,
                clickCallback: t ? () => {
                    "static" !== this._config.backdrop ? this.hide() : H.trigger(this._element, eq)
                }
                : null
            })
        }
        _initializeFocusTrap() {
            return new em({
                trapElement: this._element
            })
        }
        _addEventListeners() {
            H.on(this._element, eB, t => {
                "Escape" === t.key && (this._config.keyboard ? this.hide() : H.trigger(this._element, eq))
            }
            )
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = eY.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                        throw TypeError(`No method named "${t}"`);
                    e[t](this)
                }
            })
        }
    }
    H.on(document, eR, '[data-bs-toggle="offcanvas"]', function(t) {
        let e = B.getElementFromSelector(this);
        if (["A", "AREA"].includes(this.tagName) && t.preventDefault(),
        d(this))
            return;
        H.one(e, e6, () => {
            c(this) && this.focus()
        }
        );
        let i = B.findOne(ej);
        i && i !== e && eY.getInstance(i).hide(),
        eY.getOrCreateInstance(e).toggle(this)
    }),
    H.on(window, eH, () => {
        for (let t of B.find(ej))
            eY.getOrCreateInstance(t).show()
    }
    ),
    H.on(window, eW, () => {
        for (let t of B.find("[aria-modal][class*=show][class*=offcanvas-]"))
            "fixed" !== getComputedStyle(t).position && eY.getOrCreateInstance(t).hide()
    }
    ),
    X(eY),
    b(eY);
    let eV = {
        "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
        a: ["target", "href", "title", "rel"],
        area: [],
        b: [],
        br: [],
        col: [],
        code: [],
        div: [],
        em: [],
        hr: [],
        h1: [],
        h2: [],
        h3: [],
        h4: [],
        h5: [],
        h6: [],
        i: [],
        img: ["src", "srcset", "alt", "title", "width", "height"],
        li: [],
        ol: [],
        p: [],
        pre: [],
        s: [],
        small: [],
        span: [],
        sub: [],
        sup: [],
        strong: [],
        u: [],
        ul: []
    }
      , eU = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"])
      , eK = /^(?!javascript:)(?:[a-z0-9+.-]+:|[^&:/?#]*(?:[/?#]|$))/i
      , eZ = (t, e) => {
        let i = t.nodeName.toLowerCase();
        return e.includes(i) ? !eU.has(i) || Boolean(eK.test(t.nodeValue)) : e.filter(t => t instanceof RegExp).some(t => t.test(i))
    }
      , eQ = {
        allowList: eV,
        content: {},
        extraClass: "",
        html: !1,
        sanitize: !0,
        sanitizeFn: null,
        template: "<div></div>"
    }
      , eG = {
        allowList: "object",
        content: "object",
        extraClass: "(string|function)",
        html: "boolean",
        sanitize: "boolean",
        sanitizeFn: "(null|function)",
        template: "string"
    }
      , eJ = {
        entry: "(string|element|function|null)",
        selector: "(string|element)"
    };
    class it extends q {
        constructor(t) {
            super(),
            this._config = this._getConfig(t)
        }
        static get Default() {
            return eQ
        }
        static get DefaultType() {
            return eG
        }
        static get NAME() {
            return "TemplateFactory"
        }
        getContent() {
            return Object.values(this._config.content).map(t => this._resolvePossibleFunction(t)).filter(Boolean)
        }
        hasContent() {
            return this.getContent().length > 0
        }
        changeContent(t) {
            return this._checkContent(t),
            this._config.content = {
                ...this._config.content,
                ...t
            },
            this
        }
        toHtml() {
            let t = document.createElement("div");
            for (let[e,i] of (t.innerHTML = this._maybeSanitize(this._config.template),
            Object.entries(this._config.content)))
                this._setContent(t, i, e);
            let s = t.children[0]
              , o = this._resolvePossibleFunction(this._config.extraClass);
            return o && s.classList.add(...o.split(" ")),
            s
        }
        _typeCheckConfig(t) {
            super._typeCheckConfig(t),
            this._checkContent(t.content)
        }
        _checkContent(t) {
            for (let[e,i] of Object.entries(t))
                super._typeCheckConfig({
                    selector: e,
                    entry: i
                }, eJ)
        }
        _setContent(t, e, i) {
            let s = B.findOne(i, t);
            s && ((e = this._resolvePossibleFunction(e)) ? a(e) ? this._putElementInTemplate(l(e), s) : this._config.html ? s.innerHTML = this._maybeSanitize(e) : s.textContent = e : s.remove())
        }
        _maybeSanitize(t) {
            return this._config.sanitize ? function(t, e, i) {
                if (!t.length)
                    return t;
                if (i && "function" == typeof i)
                    return i(t);
                let s = (new window.DOMParser).parseFromString(t, "text/html")
                  , o = [].concat(...s.body.querySelectorAll("*"));
                for (let n of o) {
                    let r = n.nodeName.toLowerCase();
                    if (!Object.keys(e).includes(r)) {
                        n.remove();
                        continue
                    }
                    let a = [].concat(...n.attributes)
                      , l = [].concat(e["*"] || [], e[r] || []);
                    for (let c of a)
                        eZ(c, l) || n.removeAttribute(c.nodeName)
                }
                return s.body.innerHTML
            }(t, this._config.allowList, this._config.sanitizeFn) : t
        }
        _resolvePossibleFunction(t) {
            return v(t, [this])
        }
        _putElementInTemplate(t, e) {
            if (this._config.html)
                return e.innerHTML = "",
                void e.append(t);
            e.textContent = t.textContent
        }
    }
    let ie = new Set(["sanitize", "allowList", "sanitizeFn"])
      , ii = "fade"
      , is = "show"
      , io = ".modal"
      , ir = "hide.bs.modal"
      , ia = "hover"
      , il = "focus"
      , ic = {
        AUTO: "auto",
        TOP: "top",
        RIGHT: m() ? "left" : "right",
        BOTTOM: "bottom",
        LEFT: m() ? "right" : "left"
    }
      , id = {
        allowList: eV,
        animation: !0,
        boundary: "clippingParents",
        container: !1,
        customClass: "",
        delay: 0,
        fallbackPlacements: ["top", "right", "bottom", "left"],
        html: !1,
        offset: [0, 6],
        placement: "top",
        popperConfig: null,
        sanitize: !0,
        sanitizeFn: null,
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        title: "",
        trigger: "hover focus"
    }
      , ih = {
        allowList: "object",
        animation: "boolean",
        boundary: "(string|element)",
        container: "(string|element|boolean)",
        customClass: "(string|function)",
        delay: "(number|object)",
        fallbackPlacements: "array",
        html: "boolean",
        offset: "(array|string|function)",
        placement: "(string|function)",
        popperConfig: "(null|object|function)",
        sanitize: "boolean",
        sanitizeFn: "(null|function)",
        selector: "(string|boolean)",
        template: "string",
        title: "(string|element|function)",
        trigger: "string"
    };
    class iu extends W {
        constructor(t, i) {
            if (void 0 === e)
                throw TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
            super(t, i),
            this._isEnabled = !0,
            this._timeout = 0,
            this._isHovered = null,
            this._activeTrigger = {},
            this._popper = null,
            this._templateFactory = null,
            this._newContent = null,
            this.tip = null,
            this._setListeners(),
            this._config.selector || this._fixTitle()
        }
        static get Default() {
            return id
        }
        static get DefaultType() {
            return ih
        }
        static get NAME() {
            return "tooltip"
        }
        enable() {
            this._isEnabled = !0
        }
        disable() {
            this._isEnabled = !1
        }
        toggleEnabled() {
            this._isEnabled = !this._isEnabled
        }
        toggle() {
            this._isEnabled && (this._activeTrigger.click = !this._activeTrigger.click,
            this._isShown() ? this._leave() : this._enter())
        }
        dispose() {
            clearTimeout(this._timeout),
            H.off(this._element.closest(io), ir, this._hideModalHandler),
            this._element.getAttribute("data-bs-original-title") && this._element.setAttribute("title", this._element.getAttribute("data-bs-original-title")),
            this._disposePopper(),
            super.dispose()
        }
        show() {
            if ("none" === this._element.style.display)
                throw Error("Please use show on visible elements");
            if (!this._isWithContent() || !this._isEnabled)
                return;
            let t = H.trigger(this._element, this.constructor.eventName("show"))
              , e = (h(this._element) || this._element.ownerDocument.documentElement).contains(this._element);
            if (t.defaultPrevented || !e)
                return;
            this._disposePopper();
            let i = this._getTipElement();
            this._element.setAttribute("aria-describedby", i.getAttribute("id"));
            let {container: s} = this._config;
            if (this._element.ownerDocument.documentElement.contains(this.tip) || (s.append(i),
            H.trigger(this._element, this.constructor.eventName("inserted"))),
            this._popper = this._createPopper(i),
            i.classList.add(is),
            "ontouchstart"in document.documentElement)
                for (let o of [].concat(...document.body.children))
                    H.on(o, "mouseover", u);
            this._queueCallback( () => {
                H.trigger(this._element, this.constructor.eventName("shown")),
                !1 === this._isHovered && this._leave(),
                this._isHovered = !1
            }
            , this.tip, this._isAnimated())
        }
        hide() {
            if (this._isShown() && !H.trigger(this._element, this.constructor.eventName("hide")).defaultPrevented) {
                if (this._getTipElement().classList.remove(is),
                "ontouchstart"in document.documentElement)
                    for (let t of [].concat(...document.body.children))
                        H.off(t, "mouseover", u);
                this._activeTrigger.click = !1,
                this._activeTrigger[il] = !1,
                this._activeTrigger[ia] = !1,
                this._isHovered = null,
                this._queueCallback( () => {
                    this._isWithActiveTrigger() || (this._isHovered || this._disposePopper(),
                    this._element.removeAttribute("aria-describedby"),
                    H.trigger(this._element, this.constructor.eventName("hidden")))
                }
                , this.tip, this._isAnimated())
            }
        }
        update() {
            this._popper && this._popper.update()
        }
        _isWithContent() {
            return Boolean(this._getTitle())
        }
        _getTipElement() {
            return this.tip || (this.tip = this._createTipElement(this._newContent || this._getContentForTemplate())),
            this.tip
        }
        _createTipElement(t) {
            let e = this._getTemplateFactory(t).toHtml();
            if (!e)
                return null;
            e.classList.remove(ii, is),
            e.classList.add(`bs-${this.constructor.NAME}-auto`);
            let i = (t => {
                do
                    t += Math.floor(1e6 * Math.random());
                while (document.getElementById(t));
                return t
            }
            )(this.constructor.NAME).toString();
            return e.setAttribute("id", i),
            this._isAnimated() && e.classList.add(ii),
            e
        }
        setContent(t) {
            this._newContent = t,
            this._isShown() && (this._disposePopper(),
            this.show())
        }
        _getTemplateFactory(t) {
            return this._templateFactory ? this._templateFactory.changeContent(t) : this._templateFactory = new it({
                ...this._config,
                content: t,
                extraClass: this._resolvePossibleFunction(this._config.customClass)
            }),
            this._templateFactory
        }
        _getContentForTemplate() {
            return {
                ".tooltip-inner": this._getTitle()
            }
        }
        _getTitle() {
            return this._resolvePossibleFunction(this._config.title) || this._element.getAttribute("data-bs-original-title")
        }
        _initializeOnDelegatedTarget(t) {
            return this.constructor.getOrCreateInstance(t.delegateTarget, this._getDelegateConfig())
        }
        _isAnimated() {
            return this._config.animation || this.tip && this.tip.classList.contains(ii)
        }
        _isShown() {
            return this.tip && this.tip.classList.contains(is)
        }
        _createPopper(t) {
            let i = v(this._config.placement, [this, t, this._element])
              , s = ic[i.toUpperCase()];
            return e.createPopper(this._element, t, this._getPopperConfig(s))
        }
        _getOffset() {
            let {offset: t} = this._config;
            return "string" == typeof t ? t.split(",").map(t => Number.parseInt(t, 10)) : "function" == typeof t ? e => t(e, this._element) : t
        }
        _resolvePossibleFunction(t) {
            return v(t, [this._element])
        }
        _getPopperConfig(t) {
            let e = {
                placement: t,
                modifiers: [{
                    name: "flip",
                    options: {
                        fallbackPlacements: this._config.fallbackPlacements
                    }
                }, {
                    name: "offset",
                    options: {
                        offset: this._getOffset()
                    }
                }, {
                    name: "preventOverflow",
                    options: {
                        boundary: this._config.boundary
                    }
                }, {
                    name: "arrow",
                    options: {
                        element: `.${this.constructor.NAME}-arrow`
                    }
                }, {
                    name: "preSetPlacement",
                    enabled: !0,
                    phase: "beforeMain",
                    fn: t => {
                        this._getTipElement().setAttribute("data-popper-placement", t.state.placement)
                    }
                }]
            };
            return {
                ...e,
                ...v(this._config.popperConfig, [e])
            }
        }
        _setListeners() {
            let t = this._config.trigger.split(" ");
            for (let e of t)
                if ("click" === e)
                    H.on(this._element, this.constructor.eventName("click"), this._config.selector, t => {
                        this._initializeOnDelegatedTarget(t).toggle()
                    }
                    );
                else if ("manual" !== e) {
                    let i = e === ia ? this.constructor.eventName("mouseenter") : this.constructor.eventName("focusin")
                      , s = e === ia ? this.constructor.eventName("mouseleave") : this.constructor.eventName("focusout");
                    H.on(this._element, i, this._config.selector, t => {
                        let e = this._initializeOnDelegatedTarget(t);
                        e._activeTrigger["focusin" === t.type ? il : ia] = !0,
                        e._enter()
                    }
                    ),
                    H.on(this._element, s, this._config.selector, t => {
                        let e = this._initializeOnDelegatedTarget(t);
                        e._activeTrigger["focusout" === t.type ? il : ia] = e._element.contains(t.relatedTarget),
                        e._leave()
                    }
                    )
                }
            this._hideModalHandler = () => {
                this._element && this.hide()
            }
            ,
            H.on(this._element.closest(io), ir, this._hideModalHandler)
        }
        _fixTitle() {
            let t = this._element.getAttribute("title");
            t && (this._element.getAttribute("aria-label") || this._element.textContent.trim() || this._element.setAttribute("aria-label", t),
            this._element.setAttribute("data-bs-original-title", t),
            this._element.removeAttribute("title"))
        }
        _enter() {
            this._isShown() || this._isHovered ? this._isHovered = !0 : (this._isHovered = !0,
            this._setTimeout( () => {
                this._isHovered && this.show()
            }
            , this._config.delay.show))
        }
        _leave() {
            this._isWithActiveTrigger() || (this._isHovered = !1,
            this._setTimeout( () => {
                this._isHovered || this.hide()
            }
            , this._config.delay.hide))
        }
        _setTimeout(t, e) {
            clearTimeout(this._timeout),
            this._timeout = setTimeout(t, e)
        }
        _isWithActiveTrigger() {
            return Object.values(this._activeTrigger).includes(!0)
        }
        _getConfig(t) {
            let e = N.getDataAttributes(this._element);
            for (let i of Object.keys(e))
                ie.has(i) && delete e[i];
            return t = {
                ...e,
                ..."object" == typeof t && t ? t : {}
            },
            t = this._mergeConfigObj(t),
            t = this._configAfterMerge(t),
            this._typeCheckConfig(t),
            t
        }
        _configAfterMerge(t) {
            return t.container = !1 === t.container ? document.body : l(t.container),
            "number" == typeof t.delay && (t.delay = {
                show: t.delay,
                hide: t.delay
            }),
            "number" == typeof t.title && (t.title = t.title.toString()),
            "number" == typeof t.content && (t.content = t.content.toString()),
            t
        }
        _getDelegateConfig() {
            let t = {};
            for (let[e,i] of Object.entries(this._config))
                this.constructor.Default[e] !== i && (t[e] = i);
            return t.selector = !1,
            t.trigger = "manual",
            t
        }
        _disposePopper() {
            this._popper && (this._popper.destroy(),
            this._popper = null),
            this.tip && (this.tip.remove(),
            this.tip = null)
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = iu.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw TypeError(`No method named "${t}"`);
                    e[t]()
                }
            })
        }
    }
    b(iu);
    let ip = {
        ...iu.Default,
        content: "",
        offset: [0, 8],
        placement: "right",
        template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
        trigger: "click"
    }
      , ig = {
        ...iu.DefaultType,
        content: "(null|string|element|function)"
    };
    class im extends iu {
        static get Default() {
            return ip
        }
        static get DefaultType() {
            return ig
        }
        static get NAME() {
            return "popover"
        }
        _isWithContent() {
            return this._getTitle() || this._getContent()
        }
        _getContentForTemplate() {
            return {
                ".popover-header": this._getTitle(),
                ".popover-body": this._getContent()
            }
        }
        _getContent() {
            return this._resolvePossibleFunction(this._config.content)
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = im.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw TypeError(`No method named "${t}"`);
                    e[t]()
                }
            })
        }
    }
    b(im);
    let ib = ".bs.scrollspy"
      , iv = `activate${ib}`
      , iy = `click${ib}`
      , i$ = `load${ib}.data-api`
      , iw = "active"
      , i8 = "[href]"
      , i_ = ".nav-link"
      , ix = `${i_}, .nav-item > ${i_}, .list-group-item`
      , ik = {
        offset: null,
        rootMargin: "0px 0px -25%",
        smoothScroll: !1,
        target: null,
        threshold: [.1, .5, 1]
    }
      , i9 = {
        offset: "(number|null)",
        rootMargin: "string",
        smoothScroll: "boolean",
        target: "element",
        threshold: "array"
    };
    class iS extends W {
        constructor(t, e) {
            super(t, e),
            this._targetLinks = new Map,
            this._observableSections = new Map,
            this._rootElement = "visible" === getComputedStyle(this._element).overflowY ? null : this._element,
            this._activeTarget = null,
            this._observer = null,
            this._previousScrollData = {
                visibleEntryTop: 0,
                parentScrollTop: 0
            },
            this.refresh()
        }
        static get Default() {
            return ik
        }
        static get DefaultType() {
            return i9
        }
        static get NAME() {
            return "scrollspy"
        }
        refresh() {
            for (let t of (this._initializeTargetsAndObservables(),
            this._maybeEnableSmoothScroll(),
            this._observer ? this._observer.disconnect() : this._observer = this._getNewObserver(),
            this._observableSections.values()))
                this._observer.observe(t)
        }
        dispose() {
            this._observer.disconnect(),
            super.dispose()
        }
        _configAfterMerge(t) {
            return t.target = l(t.target) || document.body,
            t.rootMargin = t.offset ? `${t.offset}px 0px -30%` : t.rootMargin,
            "string" == typeof t.threshold && (t.threshold = t.threshold.split(",").map(t => Number.parseFloat(t))),
            t
        }
        _maybeEnableSmoothScroll() {
            this._config.smoothScroll && (H.off(this._config.target, iy),
            H.on(this._config.target, iy, i8, t => {
                let e = this._observableSections.get(t.target.hash);
                if (e) {
                    t.preventDefault();
                    let i = this._rootElement || window
                      , s = e.offsetTop - this._element.offsetTop;
                    if (i.scrollTo)
                        return void i.scrollTo({
                            top: s,
                            behavior: "smooth"
                        });
                    i.scrollTop = s
                }
            }
            ))
        }
        _getNewObserver() {
            let t = {
                root: this._rootElement,
                threshold: this._config.threshold,
                rootMargin: this._config.rootMargin
            };
            return new IntersectionObserver(t => this._observerCallback(t),t)
        }
        _observerCallback(t) {
            let e = t => this._targetLinks.get(`#${t.target.id}`)
              , i = t => {
                this._previousScrollData.visibleEntryTop = t.target.offsetTop,
                this._process(e(t))
            }
              , s = (this._rootElement || document.documentElement).scrollTop
              , o = s >= this._previousScrollData.parentScrollTop;
            for (let n of (this._previousScrollData.parentScrollTop = s,
            t)) {
                if (!n.isIntersecting) {
                    this._activeTarget = null,
                    this._clearActiveClass(e(n));
                    continue
                }
                let r = n.target.offsetTop >= this._previousScrollData.visibleEntryTop;
                if (o && r) {
                    if (i(n),
                    !s)
                        return
                } else
                    o || r || i(n)
            }
        }
        _initializeTargetsAndObservables() {
            this._targetLinks = new Map,
            this._observableSections = new Map;
            let t = B.find(i8, this._config.target);
            for (let e of t) {
                if (!e.hash || d(e))
                    continue;
                let i = B.findOne(decodeURI(e.hash), this._element);
                c(i) && (this._targetLinks.set(decodeURI(e.hash), e),
                this._observableSections.set(e.hash, i))
            }
        }
        _process(t) {
            this._activeTarget !== t && (this._clearActiveClass(this._config.target),
            this._activeTarget = t,
            t.classList.add(iw),
            this._activateParents(t),
            H.trigger(this._element, iv, {
                relatedTarget: t
            }))
        }
        _activateParents(t) {
            if (t.classList.contains("dropdown-item"))
                B.findOne(".dropdown-toggle", t.closest(".dropdown")).classList.add(iw);
            else
                for (let e of B.parents(t, ".nav, .list-group"))
                    for (let i of B.prev(e, ix))
                        i.classList.add(iw)
        }
        _clearActiveClass(t) {
            t.classList.remove(iw);
            let e = B.find(`${i8}.${iw}`, t);
            for (let i of e)
                i.classList.remove(iw)
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = iS.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                        throw TypeError(`No method named "${t}"`);
                    e[t]()
                }
            })
        }
    }
    H.on(window, i$, () => {
        for (let t of B.find('[data-bs-spy="scroll"]'))
            iS.getOrCreateInstance(t)
    }
    ),
    b(iS);
    let iT = ".bs.tab"
      , iC = `hide${iT}`
      , iA = `hidden${iT}`
      , iE = `show${iT}`
      , iP = `shown${iT}`
      , iL = `click${iT}`
      , i0 = `keydown${iT}`
      , i3 = `load${iT}`
      , iO = "ArrowRight"
      , iI = "ArrowDown"
      , i1 = "Home"
      , iD = "active"
      , iz = "fade"
      , iH = "show"
      , i2 = ":not(.dropdown-toggle)"
      , iM = '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]'
      , iF = `.nav-link${i2}, .list-group-item${i2}, [role="tab"]${i2}, ${iM}`
      , ij = `.${iD}[data-bs-toggle="tab"], .${iD}[data-bs-toggle="pill"], .${iD}[data-bs-toggle="list"]`;
    class iN extends W {
        constructor(t) {
            super(t),
            this._parent = this._element.closest('.list-group, .nav, [role="tablist"]'),
            this._parent && (this._setInitialAttributes(this._parent, this._getChildren()),
            H.on(this._element, i0, t => this._keydown(t)))
        }
        static get NAME() {
            return "tab"
        }
        show() {
            let t = this._element;
            if (this._elemIsActive(t))
                return;
            let e = this._getActiveElem()
              , i = e ? H.trigger(e, iC, {
                relatedTarget: t
            }) : null;
            H.trigger(t, iE, {
                relatedTarget: e
            }).defaultPrevented || i && i.defaultPrevented || (this._deactivate(e, t),
            this._activate(t, e))
        }
        _activate(t, e) {
            t && (t.classList.add(iD),
            this._activate(B.getElementFromSelector(t)),
            this._queueCallback( () => {
                "tab" === t.getAttribute("role") ? (t.removeAttribute("tabindex"),
                t.setAttribute("aria-selected", !0),
                this._toggleDropDown(t, !0),
                H.trigger(t, iP, {
                    relatedTarget: e
                })) : t.classList.add(iH)
            }
            , t, t.classList.contains(iz)))
        }
        _deactivate(t, e) {
            t && (t.classList.remove(iD),
            t.blur(),
            this._deactivate(B.getElementFromSelector(t)),
            this._queueCallback( () => {
                "tab" === t.getAttribute("role") ? (t.setAttribute("aria-selected", !1),
                t.setAttribute("tabindex", "-1"),
                this._toggleDropDown(t, !1),
                H.trigger(t, iA, {
                    relatedTarget: e
                })) : t.classList.remove(iH)
            }
            , t, t.classList.contains(iz)))
        }
        _keydown(t) {
            if (!["ArrowLeft", iO, "ArrowUp", iI, i1, "End"].includes(t.key))
                return;
            t.stopPropagation(),
            t.preventDefault();
            let e = this._getChildren().filter(t => !d(t)), i;
            if ([i1, "End"].includes(t.key))
                i = e[t.key === i1 ? 0 : e.length - 1];
            else {
                let s = [iO, iI].includes(t.key);
                i = $(e, t.target, s, !0)
            }
            i && (i.focus({
                preventScroll: !0
            }),
            iN.getOrCreateInstance(i).show())
        }
        _getChildren() {
            return B.find(iF, this._parent)
        }
        _getActiveElem() {
            return this._getChildren().find(t => this._elemIsActive(t)) || null
        }
        _setInitialAttributes(t, e) {
            for (let i of (this._setAttributeIfNotExists(t, "role", "tablist"),
            e))
                this._setInitialAttributesOnChild(i)
        }
        _setInitialAttributesOnChild(t) {
            t = this._getInnerElement(t);
            let e = this._elemIsActive(t)
              , i = this._getOuterElement(t);
            t.setAttribute("aria-selected", e),
            i !== t && this._setAttributeIfNotExists(i, "role", "presentation"),
            e || t.setAttribute("tabindex", "-1"),
            this._setAttributeIfNotExists(t, "role", "tab"),
            this._setInitialAttributesOnTargetPanel(t)
        }
        _setInitialAttributesOnTargetPanel(t) {
            let e = B.getElementFromSelector(t);
            e && (this._setAttributeIfNotExists(e, "role", "tabpanel"),
            t.id && this._setAttributeIfNotExists(e, "aria-labelledby", `${t.id}`))
        }
        _toggleDropDown(t, e) {
            let i = this._getOuterElement(t);
            if (!i.classList.contains("dropdown"))
                return;
            let s = (t, s) => {
                let o = B.findOne(t, i);
                o && o.classList.toggle(s, e)
            }
            ;
            s(".dropdown-toggle", iD),
            s(".dropdown-menu", iH),
            i.setAttribute("aria-expanded", e)
        }
        _setAttributeIfNotExists(t, e, i) {
            t.hasAttribute(e) || t.setAttribute(e, i)
        }
        _elemIsActive(t) {
            return t.classList.contains(iD)
        }
        _getInnerElement(t) {
            return t.matches(iF) ? t : B.findOne(iF, t)
        }
        _getOuterElement(t) {
            return t.closest(".nav-item, .list-group-item") || t
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = iN.getOrCreateInstance(this);
                if ("string" == typeof t) {
                    if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                        throw TypeError(`No method named "${t}"`);
                    e[t]()
                }
            })
        }
    }
    H.on(document, iL, iM, function(t) {
        ["A", "AREA"].includes(this.tagName) && t.preventDefault(),
        d(this) || iN.getOrCreateInstance(this).show()
    }),
    H.on(window, i3, () => {
        for (let t of B.find(ij))
            iN.getOrCreateInstance(t)
    }
    ),
    b(iN);
    let i4 = ".bs.toast"
      , i5 = `mouseover${i4}`
      , iq = `mouseout${i4}`
      , i6 = `focusin${i4}`
      , iW = `focusout${i4}`
      , iR = `hide${i4}`
      , iB = `hidden${i4}`
      , i7 = `show${i4}`
      , iX = `shown${i4}`
      , iY = "hide"
      , iV = "show"
      , iU = "showing"
      , iK = {
        animation: "boolean",
        autohide: "boolean",
        delay: "number"
    }
      , iZ = {
        animation: !0,
        autohide: !0,
        delay: 5e3
    };
    class iQ extends W {
        constructor(t, e) {
            super(t, e),
            this._timeout = null,
            this._hasMouseInteraction = !1,
            this._hasKeyboardInteraction = !1,
            this._setListeners()
        }
        static get Default() {
            return iZ
        }
        static get DefaultType() {
            return iK
        }
        static get NAME() {
            return "toast"
        }
        show() {
            H.trigger(this._element, i7).defaultPrevented || (this._clearTimeout(),
            this._config.animation && this._element.classList.add("fade"),
            this._element.classList.remove(iY),
            p(this._element),
            this._element.classList.add(iV, iU),
            this._queueCallback( () => {
                this._element.classList.remove(iU),
                H.trigger(this._element, iX),
                this._maybeScheduleHide()
            }
            , this._element, this._config.animation))
        }
        hide() {
            this.isShown() && (H.trigger(this._element, iR).defaultPrevented || (this._element.classList.add(iU),
            this._queueCallback( () => {
                this._element.classList.add(iY),
                this._element.classList.remove(iU, iV),
                H.trigger(this._element, iB)
            }
            , this._element, this._config.animation)))
        }
        dispose() {
            this._clearTimeout(),
            this.isShown() && this._element.classList.remove(iV),
            super.dispose()
        }
        isShown() {
            return this._element.classList.contains(iV)
        }
        _maybeScheduleHide() {
            this._config.autohide && (this._hasMouseInteraction || this._hasKeyboardInteraction || (this._timeout = setTimeout( () => {
                this.hide()
            }
            , this._config.delay)))
        }
        _onInteraction(t, e) {
            switch (t.type) {
            case "mouseover":
            case "mouseout":
                this._hasMouseInteraction = e;
                break;
            case "focusin":
            case "focusout":
                this._hasKeyboardInteraction = e
            }
            if (e)
                return void this._clearTimeout();
            let i = t.relatedTarget;
            this._element === i || this._element.contains(i) || this._maybeScheduleHide()
        }
        _setListeners() {
            H.on(this._element, i5, t => this._onInteraction(t, !0)),
            H.on(this._element, iq, t => this._onInteraction(t, !1)),
            H.on(this._element, i6, t => this._onInteraction(t, !0)),
            H.on(this._element, iW, t => this._onInteraction(t, !1))
        }
        _clearTimeout() {
            clearTimeout(this._timeout),
            this._timeout = null
        }
        static jQueryInterface(t) {
            return this.each(function() {
                let e = iQ.getOrCreateInstance(this, t);
                if ("string" == typeof t) {
                    if (void 0 === e[t])
                        throw TypeError(`No method named "${t}"`);
                    e[t](this)
                }
            })
        }
    }
    return X(iQ),
    b(iQ),
    {
        Alert: K,
        Button: Q,
        Carousel: tC,
        Collapse: tM,
        Dropdown: es,
        Modal: e1,
        Offcanvas: eY,
        Popover: im,
        ScrollSpy: iS,
        Tab: iN,
        Toast: iQ,
        Tooltip: iu
    }
}),
function(t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], t) : "undefined" != typeof exports ? module.exports = t(require("jquery")) : t(jQuery)
}(function(t) {
    "use strict";
    var e, i = window.Slick || {};
    (i = (e = 0,
    function(i, s) {
        var o, n = this;
        n.defaults = {
            accessibility: !0,
            adaptiveHeight: !1,
            appendArrows: t(i),
            appendDots: t(i),
            arrows: !0,
            asNavFor: null,
            prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
            nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
            autoplay: !1,
            autoplaySpeed: 3e3,
            centerMode: !1,
            centerPadding: "50px",
            cssEase: "ease",
            customPaging: function(e, i) {
                return t('<button type="button" />').text(i + 1)
            },
            dots: !1,
            dotsClass: "slick-dots",
            draggable: !0,
            easing: "linear",
            edgeFriction: .35,
            fade: !1,
            focusOnSelect: !1,
            focusOnChange: !1,
            infinite: !0,
            initialSlide: 0,
            lazyLoad: "ondemand",
            mobileFirst: !1,
            pauseOnHover: !0,
            pauseOnFocus: !0,
            pauseOnDotsHover: !1,
            respondTo: "window",
            responsive: null,
            rows: 1,
            rtl: !1,
            slide: "",
            slidesPerRow: 1,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            swipe: !0,
            swipeToSlide: !1,
            touchMove: !0,
            touchThreshold: 5,
            useCSS: !0,
            useTransform: !0,
            variableWidth: !1,
            vertical: !1,
            verticalSwiping: !1,
            waitForAnimate: !0,
            zIndex: 1e3
        },
        n.initials = {
            animating: !1,
            dragging: !1,
            autoPlayTimer: null,
            currentDirection: 0,
            currentLeft: null,
            currentSlide: 0,
            direction: 1,
            $dots: null,
            listWidth: null,
            listHeight: null,
            loadIndex: 0,
            $nextArrow: null,
            $prevArrow: null,
            scrolling: !1,
            slideCount: null,
            slideWidth: null,
            $slideTrack: null,
            $slides: null,
            sliding: !1,
            slideOffset: 0,
            swipeLeft: null,
            swiping: !1,
            $list: null,
            touchObject: {},
            transformsEnabled: !1,
            unslicked: !1
        },
        t.extend(n, n.initials),
        n.activeBreakpoint = null,
        n.animType = null,
        n.animProp = null,
        n.breakpoints = [],
        n.breakpointSettings = [],
        n.cssTransitions = !1,
        n.focussed = !1,
        n.interrupted = !1,
        n.hidden = "hidden",
        n.paused = !0,
        n.positionProp = null,
        n.respondTo = null,
        n.rowCount = 1,
        n.shouldClick = !0,
        n.$slider = t(i),
        n.$slidesCache = null,
        n.transformType = null,
        n.transitionType = null,
        n.visibilityChange = "visibilitychange",
        n.windowWidth = 0,
        n.windowTimer = null,
        o = t(i).data("slick") || {},
        n.options = t.extend({}, n.defaults, s, o),
        n.currentSlide = n.options.initialSlide,
        n.originalSettings = n.options,
        void 0 !== document.mozHidden ? (n.hidden = "mozHidden",
        n.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (n.hidden = "webkitHidden",
        n.visibilityChange = "webkitvisibilitychange"),
        n.autoPlay = t.proxy(n.autoPlay, n),
        n.autoPlayClear = t.proxy(n.autoPlayClear, n),
        n.autoPlayIterator = t.proxy(n.autoPlayIterator, n),
        n.changeSlide = t.proxy(n.changeSlide, n),
        n.clickHandler = t.proxy(n.clickHandler, n),
        n.selectHandler = t.proxy(n.selectHandler, n),
        n.setPosition = t.proxy(n.setPosition, n),
        n.swipeHandler = t.proxy(n.swipeHandler, n),
        n.dragHandler = t.proxy(n.dragHandler, n),
        n.keyHandler = t.proxy(n.keyHandler, n),
        n.instanceUid = e++,
        n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/,
        n.registerBreakpoints(),
        n.init(!0)
    }
    )).prototype.activateADA = function() {
        this.$slideTrack.find(".slick-active").attr({
            "aria-hidden": "false"
        }).find("a, input, button, select").attr({
            tabindex: "0"
        })
    }
    ,
    i.prototype.addSlide = i.prototype.slickAdd = function(e, i, s) {
        var o = this;
        if ("boolean" == typeof i)
            s = i,
            i = null;
        else if (i < 0 || i >= o.slideCount)
            return !1;
        o.unload(),
        "number" == typeof i ? 0 === i && 0 === o.$slides.length ? t(e).appendTo(o.$slideTrack) : s ? t(e).insertBefore(o.$slides.eq(i)) : t(e).insertAfter(o.$slides.eq(i)) : !0 === s ? t(e).prependTo(o.$slideTrack) : t(e).appendTo(o.$slideTrack),
        o.$slides = o.$slideTrack.children(this.options.slide),
        o.$slideTrack.children(this.options.slide).detach(),
        o.$slideTrack.append(o.$slides),
        o.$slides.each(function(e, i) {
            t(i).attr("data-slick-index", e)
        }),
        o.$slidesCache = o.$slides,
        o.reinit()
    }
    ,
    i.prototype.animateHeight = function() {
        if (1 === this.options.slidesToShow && !0 === this.options.adaptiveHeight && !1 === this.options.vertical) {
            var t = this.$slides.eq(this.currentSlide).outerHeight(!0);
            this.$list.animate({
                height: t
            }, this.options.speed)
        }
    }
    ,
    i.prototype.animateSlide = function(e, i) {
        var s = {}
          , o = this;
        o.animateHeight(),
        !0 === o.options.rtl && !1 === o.options.vertical && (e = -e),
        !1 === o.transformsEnabled ? !1 === o.options.vertical ? o.$slideTrack.animate({
            left: e
        }, o.options.speed, o.options.easing, i) : o.$slideTrack.animate({
            top: e
        }, o.options.speed, o.options.easing, i) : !1 === o.cssTransitions ? (!0 === o.options.rtl && (o.currentLeft = -o.currentLeft),
        t({
            animStart: o.currentLeft
        }).animate({
            animStart: e
        }, {
            duration: o.options.speed,
            easing: o.options.easing,
            step: function(t) {
                t = Math.ceil(t),
                !1 === o.options.vertical ? (s[o.animType] = "translate(" + t + "px, 0px)",
                o.$slideTrack.css(s)) : (s[o.animType] = "translate(0px," + t + "px)",
                o.$slideTrack.css(s))
            },
            complete: function() {
                i && i.call()
            }
        })) : (o.applyTransition(),
        e = Math.ceil(e),
        !1 === o.options.vertical ? s[o.animType] = "translate3d(" + e + "px, 0px, 0px)" : s[o.animType] = "translate3d(0px," + e + "px, 0px)",
        o.$slideTrack.css(s),
        i && setTimeout(function() {
            o.disableTransition(),
            i.call()
        }, o.options.speed))
    }
    ,
    i.prototype.getNavTarget = function() {
        var e = this.options.asNavFor;
        return e && null !== e && (e = t(e).not(this.$slider)),
        e
    }
    ,
    i.prototype.asNavFor = function(e) {
        var i = this.getNavTarget();
        null !== i && "object" == typeof i && i.each(function() {
            var i = t(this).slick("getSlick");
            i.unslicked || i.slideHandler(e, !0)
        })
    }
    ,
    i.prototype.applyTransition = function(t) {
        var e = this
          , i = {};
        !1 === e.options.fade ? i[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase : i[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase,
        !1 === e.options.fade ? e.$slideTrack.css(i) : e.$slides.eq(t).css(i)
    }
    ,
    i.prototype.autoPlay = function() {
        var t = this;
        t.autoPlayClear(),
        t.slideCount > t.options.slidesToShow && (t.autoPlayTimer = setInterval(t.autoPlayIterator, t.options.autoplaySpeed))
    }
    ,
    i.prototype.autoPlayClear = function() {
        this.autoPlayTimer && clearInterval(this.autoPlayTimer)
    }
    ,
    i.prototype.autoPlayIterator = function() {
        var t = this
          , e = t.currentSlide + t.options.slidesToScroll;
        t.paused || t.interrupted || t.focussed || (!1 === t.options.infinite && (1 === t.direction && t.currentSlide + 1 === t.slideCount - 1 ? t.direction = 0 : 0 === t.direction && (e = t.currentSlide - t.options.slidesToScroll,
        t.currentSlide - 1 == 0 && (t.direction = 1))),
        t.slideHandler(e))
    }
    ,
    i.prototype.buildArrows = function() {
        var e = this;
        !0 === e.options.arrows && (e.$prevArrow = t(e.options.prevArrow).addClass("slick-arrow"),
        e.$nextArrow = t(e.options.nextArrow).addClass("slick-arrow"),
        e.slideCount > e.options.slidesToShow ? (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
        e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
        e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows),
        e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows),
        !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    }
    ,
    i.prototype.buildDots = function() {
        var e, i, s = this;
        if (!0 === s.options.dots) {
            for (s.$slider.addClass("slick-dotted"),
            i = t("<ul />").addClass(s.options.dotsClass),
            e = 0; e <= s.getDotCount(); e += 1)
                i.append(t("<li />").append(s.options.customPaging.call(this, s, e)));
            s.$dots = i.appendTo(s.options.appendDots),
            s.$dots.find("li").first().addClass("slick-active")
        }
    }
    ,
    i.prototype.buildOut = function() {
        var e = this;
        e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide"),
        e.slideCount = e.$slides.length,
        e.$slides.each(function(e, i) {
            t(i).attr("data-slick-index", e).data("originalStyling", t(i).attr("style") || "")
        }),
        e.$slider.addClass("slick-slider"),
        e.$slideTrack = 0 === e.slideCount ? t('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent(),
        e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent(),
        e.$slideTrack.css("opacity", 0),
        !0 !== e.options.centerMode && !0 !== e.options.swipeToSlide || (e.options.slidesToScroll = 1),
        t("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"),
        e.setupInfinite(),
        e.buildArrows(),
        e.buildDots(),
        e.updateDots(),
        e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0),
        !0 === e.options.draggable && e.$list.addClass("draggable")
    }
    ,
    i.prototype.buildRows = function() {
        var t, e, i, s, o, n, r;
        if (s = document.createDocumentFragment(),
        n = this.$slider.children(),
        this.options.rows > 1) {
            for (r = this.options.slidesPerRow * this.options.rows,
            o = Math.ceil(n.length / r),
            t = 0; t < o; t++) {
                var a = document.createElement("div");
                for (e = 0; e < this.options.rows; e++) {
                    var l = document.createElement("div");
                    for (i = 0; i < this.options.slidesPerRow; i++) {
                        var c = t * r + (e * this.options.slidesPerRow + i);
                        n.get(c) && l.appendChild(n.get(c))
                    }
                    a.appendChild(l)
                }
                s.appendChild(a)
            }
            this.$slider.empty().append(s),
            this.$slider.children().children().children().css({
                width: 100 / this.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    }
    ,
    i.prototype.checkResponsive = function(e, i) {
        var s, o, n, r = this, a = !1, l = r.$slider.width(), c = window.innerWidth || t(window).width();
        if ("window" === r.respondTo ? n = c : "slider" === r.respondTo ? n = l : "min" === r.respondTo && (n = Math.min(c, l)),
        r.options.responsive && r.options.responsive.length && null !== r.options.responsive) {
            for (s in o = null,
            r.breakpoints)
                r.breakpoints.hasOwnProperty(s) && (!1 === r.originalSettings.mobileFirst ? n < r.breakpoints[s] && (o = r.breakpoints[s]) : n > r.breakpoints[s] && (o = r.breakpoints[s]));
            null !== o ? null !== r.activeBreakpoint ? (o !== r.activeBreakpoint || i) && (r.activeBreakpoint = o,
            "unslick" === r.breakpointSettings[o] ? r.unslick(o) : (r.options = t.extend({}, r.originalSettings, r.breakpointSettings[o]),
            !0 === e && (r.currentSlide = r.options.initialSlide),
            r.refresh(e)),
            a = o) : (r.activeBreakpoint = o,
            "unslick" === r.breakpointSettings[o] ? r.unslick(o) : (r.options = t.extend({}, r.originalSettings, r.breakpointSettings[o]),
            !0 === e && (r.currentSlide = r.options.initialSlide),
            r.refresh(e)),
            a = o) : null !== r.activeBreakpoint && (r.activeBreakpoint = null,
            r.options = r.originalSettings,
            !0 === e && (r.currentSlide = r.options.initialSlide),
            r.refresh(e),
            a = o),
            e || !1 === a || r.$slider.trigger("breakpoint", [r, a])
        }
    }
    ,
    i.prototype.changeSlide = function(e, i) {
        var s, o, n, r = t(e.currentTarget);
        switch (r.is("a") && e.preventDefault(),
        r.is("li") || (r = r.closest("li")),
        s = (n = this.slideCount % this.options.slidesToScroll != 0) ? 0 : (this.slideCount - this.currentSlide) % this.options.slidesToScroll,
        e.data.message) {
        case "previous":
            o = 0 === s ? this.options.slidesToScroll : this.options.slidesToShow - s,
            this.slideCount > this.options.slidesToShow && this.slideHandler(this.currentSlide - o, !1, i);
            break;
        case "next":
            o = 0 === s ? this.options.slidesToScroll : s,
            this.slideCount > this.options.slidesToShow && this.slideHandler(this.currentSlide + o, !1, i);
            break;
        case "index":
            var a = 0 === e.data.index ? 0 : e.data.index || r.index() * this.options.slidesToScroll;
            this.slideHandler(this.checkNavigable(a), !1, i),
            r.children().trigger("focus");
            break;
        default:
            return
        }
    }
    ,
    i.prototype.checkNavigable = function(t) {
        var e, i;
        if (e = this.getNavigableIndexes(),
        i = 0,
        t > e[e.length - 1])
            t = e[e.length - 1];
        else
            for (var s in e) {
                if (t < e[s]) {
                    t = i;
                    break
                }
                i = e[s]
            }
        return t
    }
    ,
    i.prototype.cleanUpEvents = function() {
        this.options.dots && null !== this.$dots && (t("li", this.$dots).off("click.slick", this.changeSlide).off("mouseenter.slick", t.proxy(this.interrupt, this, !0)).off("mouseleave.slick", t.proxy(this.interrupt, this, !1)),
        !0 === this.options.accessibility && this.$dots.off("keydown.slick", this.keyHandler)),
        this.$slider.off("focus.slick blur.slick"),
        !0 === this.options.arrows && this.slideCount > this.options.slidesToShow && (this.$prevArrow && this.$prevArrow.off("click.slick", this.changeSlide),
        this.$nextArrow && this.$nextArrow.off("click.slick", this.changeSlide),
        !0 === this.options.accessibility && (this.$prevArrow && this.$prevArrow.off("keydown.slick", this.keyHandler),
        this.$nextArrow && this.$nextArrow.off("keydown.slick", this.keyHandler))),
        this.$list.off("touchstart.slick mousedown.slick", this.swipeHandler),
        this.$list.off("touchmove.slick mousemove.slick", this.swipeHandler),
        this.$list.off("touchend.slick mouseup.slick", this.swipeHandler),
        this.$list.off("touchcancel.slick mouseleave.slick", this.swipeHandler),
        this.$list.off("click.slick", this.clickHandler),
        t(document).off(this.visibilityChange, this.visibility),
        this.cleanUpSlideEvents(),
        !0 === this.options.accessibility && this.$list.off("keydown.slick", this.keyHandler),
        !0 === this.options.focusOnSelect && t(this.$slideTrack).children().off("click.slick", this.selectHandler),
        t(window).off("orientationchange.slick.slick-" + this.instanceUid, this.orientationChange),
        t(window).off("resize.slick.slick-" + this.instanceUid, this.resize),
        t("[draggable!=true]", this.$slideTrack).off("dragstart", this.preventDefault),
        t(window).off("load.slick.slick-" + this.instanceUid, this.setPosition)
    }
    ,
    i.prototype.cleanUpSlideEvents = function() {
        this.$list.off("mouseenter.slick", t.proxy(this.interrupt, this, !0)),
        this.$list.off("mouseleave.slick", t.proxy(this.interrupt, this, !1))
    }
    ,
    i.prototype.cleanUpRows = function() {
        var t;
        this.options.rows > 1 && ((t = this.$slides.children().children()).removeAttr("style"),
        this.$slider.empty().append(t))
    }
    ,
    i.prototype.clickHandler = function(t) {
        !1 === this.shouldClick && (t.stopImmediatePropagation(),
        t.stopPropagation(),
        t.preventDefault())
    }
    ,
    i.prototype.destroy = function(e) {
        var i = this;
        i.autoPlayClear(),
        i.touchObject = {},
        i.cleanUpEvents(),
        t(".slick-cloned", i.$slider).detach(),
        i.$dots && i.$dots.remove(),
        i.$prevArrow && i.$prevArrow.length && (i.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""),
        i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove()),
        i.$nextArrow && i.$nextArrow.length && (i.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""),
        i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove()),
        i.$slides && (i.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function() {
            t(this).attr("style", t(this).data("originalStyling"))
        }),
        i.$slideTrack.children(this.options.slide).detach(),
        i.$slideTrack.detach(),
        i.$list.detach(),
        i.$slider.append(i.$slides)),
        i.cleanUpRows(),
        i.$slider.removeClass("slick-slider"),
        i.$slider.removeClass("slick-initialized"),
        i.$slider.removeClass("slick-dotted"),
        i.unslicked = !0,
        e || i.$slider.trigger("destroy", [i])
    }
    ,
    i.prototype.disableTransition = function(t) {
        var e = this
          , i = {};
        i[e.transitionType] = "",
        !1 === e.options.fade ? e.$slideTrack.css(i) : e.$slides.eq(t).css(i)
    }
    ,
    i.prototype.fadeSlide = function(t, e) {
        var i = this;
        !1 === i.cssTransitions ? (i.$slides.eq(t).css({
            zIndex: i.options.zIndex
        }),
        i.$slides.eq(t).animate({
            opacity: 1
        }, i.options.speed, i.options.easing, e)) : (i.applyTransition(t),
        i.$slides.eq(t).css({
            opacity: 1,
            zIndex: i.options.zIndex
        }),
        e && setTimeout(function() {
            i.disableTransition(t),
            e.call()
        }, i.options.speed))
    }
    ,
    i.prototype.fadeSlideOut = function(t) {
        !1 === this.cssTransitions ? this.$slides.eq(t).animate({
            opacity: 0,
            zIndex: this.options.zIndex - 2
        }, this.options.speed, this.options.easing) : (this.applyTransition(t),
        this.$slides.eq(t).css({
            opacity: 0,
            zIndex: this.options.zIndex - 2
        }))
    }
    ,
    i.prototype.filterSlides = i.prototype.slickFilter = function(t) {
        var e = this;
        null !== t && (e.$slidesCache = e.$slides,
        e.unload(),
        e.$slideTrack.children(this.options.slide).detach(),
        e.$slidesCache.filter(t).appendTo(e.$slideTrack),
        e.reinit())
    }
    ,
    i.prototype.focusHandler = function() {
        var e = this;
        e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*", function(i) {
            i.stopImmediatePropagation();
            var s = t(this);
            setTimeout(function() {
                e.options.pauseOnFocus && (e.focussed = s.is(":focus"),
                e.autoPlay())
            }, 0)
        })
    }
    ,
    i.prototype.getCurrent = i.prototype.slickCurrentSlide = function() {
        return this.currentSlide
    }
    ,
    i.prototype.getDotCount = function() {
        var t = 0
          , e = 0
          , i = 0;
        if (!0 === this.options.infinite) {
            if (this.slideCount <= this.options.slidesToShow)
                ++i;
            else
                for (; t < this.slideCount; )
                    ++i,
                    t = e + this.options.slidesToScroll,
                    e += this.options.slidesToScroll <= this.options.slidesToShow ? this.options.slidesToScroll : this.options.slidesToShow
        } else if (!0 === this.options.centerMode)
            i = this.slideCount;
        else if (this.options.asNavFor)
            for (; t < this.slideCount; )
                ++i,
                t = e + this.options.slidesToScroll,
                e += this.options.slidesToScroll <= this.options.slidesToShow ? this.options.slidesToScroll : this.options.slidesToShow;
        else
            i = 1 + Math.ceil((this.slideCount - this.options.slidesToShow) / this.options.slidesToScroll);
        return i - 1
    }
    ,
    i.prototype.getLeft = function(t) {
        var e, i, s, o, n = this, r = 0;
        return n.slideOffset = 0,
        i = n.$slides.first().outerHeight(!0),
        !0 === n.options.infinite ? (n.slideCount > n.options.slidesToShow && (n.slideOffset = -(n.slideWidth * n.options.slidesToShow * 1),
        o = -1,
        !0 === n.options.vertical && !0 === n.options.centerMode && (2 === n.options.slidesToShow ? o = -1.5 : 1 === n.options.slidesToShow && (o = -2)),
        r = i * n.options.slidesToShow * o),
        n.slideCount % n.options.slidesToScroll != 0 && t + n.options.slidesToScroll > n.slideCount && n.slideCount > n.options.slidesToShow && (t > n.slideCount ? (n.slideOffset = -((n.options.slidesToShow - (t - n.slideCount)) * n.slideWidth * 1),
        r = -((n.options.slidesToShow - (t - n.slideCount)) * i * 1)) : (n.slideOffset = -(n.slideCount % n.options.slidesToScroll * n.slideWidth * 1),
        r = -(n.slideCount % n.options.slidesToScroll * i * 1)))) : t + n.options.slidesToShow > n.slideCount && (n.slideOffset = (t + n.options.slidesToShow - n.slideCount) * n.slideWidth,
        r = (t + n.options.slidesToShow - n.slideCount) * i),
        n.slideCount <= n.options.slidesToShow && (n.slideOffset = 0,
        r = 0),
        !0 === n.options.centerMode && n.slideCount <= n.options.slidesToShow ? n.slideOffset = n.slideWidth * Math.floor(n.options.slidesToShow) / 2 - n.slideWidth * n.slideCount / 2 : !0 === n.options.centerMode && !0 === n.options.infinite ? n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2) - n.slideWidth : !0 === n.options.centerMode && (n.slideOffset = 0,
        n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2)),
        e = !1 === n.options.vertical ? -(t * n.slideWidth * 1) + n.slideOffset : -(t * i * 1) + r,
        !0 === n.options.variableWidth && (s = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(t) : n.$slideTrack.children(".slick-slide").eq(t + n.options.slidesToShow),
        e = !0 === n.options.rtl ? s[0] ? -1 * (n.$slideTrack.width() - s[0].offsetLeft - s.width()) : 0 : s[0] ? -1 * s[0].offsetLeft : 0,
        !0 === n.options.centerMode && (s = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(t) : n.$slideTrack.children(".slick-slide").eq(t + n.options.slidesToShow + 1),
        e = !0 === n.options.rtl ? s[0] ? -1 * (n.$slideTrack.width() - s[0].offsetLeft - s.width()) : 0 : s[0] ? -1 * s[0].offsetLeft : 0,
        e += (n.$list.width() - s.outerWidth()) / 2)),
        e
    }
    ,
    i.prototype.getOption = i.prototype.slickGetOption = function(t) {
        return this.options[t]
    }
    ,
    i.prototype.getNavigableIndexes = function() {
        var t, e = 0, i = 0, s = [];
        for (!1 === this.options.infinite ? t = this.slideCount : (e = -1 * this.options.slidesToScroll,
        i = -1 * this.options.slidesToScroll,
        t = 2 * this.slideCount); e < t; )
            s.push(e),
            e = i + this.options.slidesToScroll,
            i += this.options.slidesToScroll <= this.options.slidesToShow ? this.options.slidesToScroll : this.options.slidesToShow;
        return s
    }
    ,
    i.prototype.getSlick = function() {
        return this
    }
    ,
    i.prototype.getSlideCount = function() {
        var e, i, s = this;
        return i = !0 === s.options.centerMode ? s.slideWidth * Math.floor(s.options.slidesToShow / 2) : 0,
        !0 === s.options.swipeToSlide ? (s.$slideTrack.find(".slick-slide").each(function(o, n) {
            if (n.offsetLeft - i + t(n).outerWidth() / 2 > -1 * s.swipeLeft)
                return e = n,
                !1
        }),
        Math.abs(t(e).attr("data-slick-index") - s.currentSlide) || 1) : s.options.slidesToScroll
    }
    ,
    i.prototype.goTo = i.prototype.slickGoTo = function(t, e) {
        this.changeSlide({
            data: {
                message: "index",
                index: parseInt(t)
            }
        }, e)
    }
    ,
    i.prototype.init = function(e) {
        var i = this;
        t(i.$slider).hasClass("slick-initialized") || (t(i.$slider).addClass("slick-initialized"),
        i.buildRows(),
        i.buildOut(),
        i.setProps(),
        i.startLoad(),
        i.loadSlider(),
        i.initializeEvents(),
        i.updateArrows(),
        i.updateDots(),
        i.checkResponsive(!0),
        i.focusHandler()),
        e && i.$slider.trigger("init", [i]),
        !0 === i.options.accessibility && i.initADA(),
        i.options.autoplay && (i.paused = !1,
        i.autoPlay())
    }
    ,
    i.prototype.initADA = function() {
        var e = this
          , i = Math.ceil(e.slideCount / e.options.slidesToShow)
          , s = e.getNavigableIndexes().filter(function(t) {
            return t >= 0 && t < e.slideCount
        });
        e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({
            tabindex: "-1"
        }),
        null !== e.$dots && (e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(i) {
            var o = s.indexOf(i);
            t(this).attr({
                role: "tabpanel",
                id: "slick-slide" + e.instanceUid + i,
                tabindex: -1
            }),
            -1 !== o && t(this).attr({
                "aria-describedby": "slick-slide-control" + e.instanceUid + o
            })
        }),
        e.$dots.attr("role", "tablist").find("li").each(function(o) {
            var n = s[o];
            t(this).attr({
                role: "presentation"
            }),
            t(this).find("button").first().attr({
                role: "tab",
                id: "slick-slide-control" + e.instanceUid + o,
                "aria-controls": "slick-slide" + e.instanceUid + n,
                "aria-label": o + 1 + " of " + i,
                "aria-selected": null,
                tabindex: "-1"
            })
        }).eq(e.currentSlide).find("button").attr({
            "aria-selected": "true",
            tabindex: "0"
        }).end());
        for (var o = e.currentSlide, n = o + e.options.slidesToShow; o < n; o++)
            e.$slides.eq(o).attr("tabindex", 0);
        e.activateADA()
    }
    ,
    i.prototype.initArrowEvents = function() {
        !0 === this.options.arrows && this.slideCount > this.options.slidesToShow && (this.$prevArrow.off("click.slick").on("click.slick", {
            message: "previous"
        }, this.changeSlide),
        this.$nextArrow.off("click.slick").on("click.slick", {
            message: "next"
        }, this.changeSlide),
        !0 === this.options.accessibility && (this.$prevArrow.on("keydown.slick", this.keyHandler),
        this.$nextArrow.on("keydown.slick", this.keyHandler)))
    }
    ,
    i.prototype.initDotEvents = function() {
        !0 === this.options.dots && (t("li", this.$dots).on("click.slick", {
            message: "index"
        }, this.changeSlide),
        !0 === this.options.accessibility && this.$dots.on("keydown.slick", this.keyHandler)),
        !0 === this.options.dots && !0 === this.options.pauseOnDotsHover && t("li", this.$dots).on("mouseenter.slick", t.proxy(this.interrupt, this, !0)).on("mouseleave.slick", t.proxy(this.interrupt, this, !1))
    }
    ,
    i.prototype.initSlideEvents = function() {
        this.options.pauseOnHover && (this.$list.on("mouseenter.slick", t.proxy(this.interrupt, this, !0)),
        this.$list.on("mouseleave.slick", t.proxy(this.interrupt, this, !1)))
    }
    ,
    i.prototype.initializeEvents = function() {
        this.initArrowEvents(),
        this.initDotEvents(),
        this.initSlideEvents(),
        this.$list.on("touchstart.slick mousedown.slick", {
            action: "start"
        }, this.swipeHandler),
        this.$list.on("touchmove.slick mousemove.slick", {
            action: "move"
        }, this.swipeHandler),
        this.$list.on("touchend.slick mouseup.slick", {
            action: "end"
        }, this.swipeHandler),
        this.$list.on("touchcancel.slick mouseleave.slick", {
            action: "end"
        }, this.swipeHandler),
        this.$list.on("click.slick", this.clickHandler),
        t(document).on(this.visibilityChange, t.proxy(this.visibility, this)),
        !0 === this.options.accessibility && this.$list.on("keydown.slick", this.keyHandler),
        !0 === this.options.focusOnSelect && t(this.$slideTrack).children().on("click.slick", this.selectHandler),
        t(window).on("orientationchange.slick.slick-" + this.instanceUid, t.proxy(this.orientationChange, this)),
        t(window).on("resize.slick.slick-" + this.instanceUid, t.proxy(this.resize, this)),
        t("[draggable!=true]", this.$slideTrack).on("dragstart", this.preventDefault),
        t(window).on("load.slick.slick-" + this.instanceUid, this.setPosition),
        t(this.setPosition)
    }
    ,
    i.prototype.initUI = function() {
        !0 === this.options.arrows && this.slideCount > this.options.slidesToShow && (this.$prevArrow.show(),
        this.$nextArrow.show()),
        !0 === this.options.dots && this.slideCount > this.options.slidesToShow && this.$dots.show()
    }
    ,
    i.prototype.keyHandler = function(t) {
        t.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === t.keyCode && !0 === this.options.accessibility ? this.changeSlide({
            data: {
                message: !0 === this.options.rtl ? "next" : "previous"
            }
        }) : 39 === t.keyCode && !0 === this.options.accessibility && this.changeSlide({
            data: {
                message: !0 === this.options.rtl ? "previous" : "next"
            }
        }))
    }
    ,
    i.prototype.lazyLoad = function() {
        function e(e) {
            t("img[data-lazy]", e).each(function() {
                var e = t(this)
                  , i = t(this).attr("data-lazy")
                  , s = t(this).attr("data-srcset")
                  , o = t(this).attr("data-sizes") || n.$slider.attr("data-sizes")
                  , r = document.createElement("img");
                r.onload = function() {
                    e.animate({
                        opacity: 0
                    }, 100, function() {
                        s && (e.attr("srcset", s),
                        o && e.attr("sizes", o)),
                        e.attr("src", i).animate({
                            opacity: 1
                        }, 200, function() {
                            e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")
                        }),
                        n.$slider.trigger("lazyLoaded", [n, e, i])
                    })
                }
                ,
                r.onerror = function() {
                    e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),
                    n.$slider.trigger("lazyLoadError", [n, e, i])
                }
                ,
                r.src = i
            })
        }
        var i, s, o, n = this;
        if (!0 === n.options.centerMode ? !0 === n.options.infinite ? o = (s = n.currentSlide + (n.options.slidesToShow / 2 + 1)) + n.options.slidesToShow + 2 : (s = Math.max(0, n.currentSlide - (n.options.slidesToShow / 2 + 1)),
        o = n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide) : (o = Math.ceil((s = n.options.infinite ? n.options.slidesToShow + n.currentSlide : n.currentSlide) + n.options.slidesToShow),
        !0 === n.options.fade && (s > 0 && s--,
        o <= n.slideCount && o++)),
        i = n.$slider.find(".slick-slide").slice(s, o),
        "anticipated" === n.options.lazyLoad)
            for (var r = s - 1, a = o, l = n.$slider.find(".slick-slide"), c = 0; c < n.options.slidesToScroll; c++)
                r < 0 && (r = n.slideCount - 1),
                i = (i = i.add(l.eq(r))).add(l.eq(a)),
                r--,
                a++;
        e(i),
        n.slideCount <= n.options.slidesToShow ? e(n.$slider.find(".slick-slide")) : n.currentSlide >= n.slideCount - n.options.slidesToShow ? e(n.$slider.find(".slick-cloned").slice(0, n.options.slidesToShow)) : 0 === n.currentSlide && e(n.$slider.find(".slick-cloned").slice(-1 * n.options.slidesToShow))
    }
    ,
    i.prototype.loadSlider = function() {
        this.setPosition(),
        this.$slideTrack.css({
            opacity: 1
        }),
        this.$slider.removeClass("slick-loading"),
        this.initUI(),
        "progressive" === this.options.lazyLoad && this.progressiveLazyLoad()
    }
    ,
    i.prototype.next = i.prototype.slickNext = function() {
        this.changeSlide({
            data: {
                message: "next"
            }
        })
    }
    ,
    i.prototype.orientationChange = function() {
        this.checkResponsive(),
        this.setPosition()
    }
    ,
    i.prototype.pause = i.prototype.slickPause = function() {
        var t = this;
        t.autoPlayClear(),
        t.paused = !0
    }
    ,
    i.prototype.play = i.prototype.slickPlay = function() {
        var t = this;
        t.autoPlay(),
        t.options.autoplay = !0,
        t.paused = !1,
        t.focussed = !1,
        t.interrupted = !1
    }
    ,
    i.prototype.postSlide = function(e) {
        var i = this;
        i.unslicked || (i.$slider.trigger("afterChange", [i, e]),
        i.animating = !1,
        i.slideCount > i.options.slidesToShow && i.setPosition(),
        i.swipeLeft = null,
        i.options.autoplay && i.autoPlay(),
        !0 === i.options.accessibility && (i.initADA(),
        i.options.focusOnChange && t(i.$slides.get(i.currentSlide)).attr("tabindex", 0).focus()))
    }
    ,
    i.prototype.prev = i.prototype.slickPrev = function() {
        this.changeSlide({
            data: {
                message: "previous"
            }
        })
    }
    ,
    i.prototype.preventDefault = function(t) {
        t.preventDefault()
    }
    ,
    i.prototype.progressiveLazyLoad = function(e) {
        e = e || 1;
        var i, s, o, n, r, a = this, l = t("img[data-lazy]", a.$slider);
        l.length ? (s = (i = l.first()).attr("data-lazy"),
        o = i.attr("data-srcset"),
        n = i.attr("data-sizes") || a.$slider.attr("data-sizes"),
        (r = document.createElement("img")).onload = function() {
            o && (i.attr("srcset", o),
            n && i.attr("sizes", n)),
            i.attr("src", s).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"),
            !0 === a.options.adaptiveHeight && a.setPosition(),
            a.$slider.trigger("lazyLoaded", [a, i, s]),
            a.progressiveLazyLoad()
        }
        ,
        r.onerror = function() {
            e < 3 ? setTimeout(function() {
                a.progressiveLazyLoad(e + 1)
            }, 500) : (i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),
            a.$slider.trigger("lazyLoadError", [a, i, s]),
            a.progressiveLazyLoad())
        }
        ,
        r.src = s) : a.$slider.trigger("allImagesLoaded", [a])
    }
    ,
    i.prototype.refresh = function(e) {
        var i, s, o = this;
        s = o.slideCount - o.options.slidesToShow,
        !o.options.infinite && o.currentSlide > s && (o.currentSlide = s),
        o.slideCount <= o.options.slidesToShow && (o.currentSlide = 0),
        i = o.currentSlide,
        o.destroy(!0),
        t.extend(o, o.initials, {
            currentSlide: i
        }),
        o.init(),
        e || o.changeSlide({
            data: {
                message: "index",
                index: i
            }
        }, !1)
    }
    ,
    i.prototype.registerBreakpoints = function() {
        var e, i, s, o = this, n = o.options.responsive || null;
        if ("array" === t.type(n) && n.length) {
            for (e in o.respondTo = o.options.respondTo || "window",
            n)
                if (s = o.breakpoints.length - 1,
                n.hasOwnProperty(e)) {
                    for (i = n[e].breakpoint; s >= 0; )
                        o.breakpoints[s] && o.breakpoints[s] === i && o.breakpoints.splice(s, 1),
                        s--;
                    o.breakpoints.push(i),
                    o.breakpointSettings[i] = n[e].settings
                }
            o.breakpoints.sort(function(t, e) {
                return o.options.mobileFirst ? t - e : e - t
            })
        }
    }
    ,
    i.prototype.reinit = function() {
        var e = this;
        e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide"),
        e.slideCount = e.$slides.length,
        e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll),
        e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0),
        e.registerBreakpoints(),
        e.setProps(),
        e.setupInfinite(),
        e.buildArrows(),
        e.updateArrows(),
        e.initArrowEvents(),
        e.buildDots(),
        e.updateDots(),
        e.initDotEvents(),
        e.cleanUpSlideEvents(),
        e.initSlideEvents(),
        e.checkResponsive(!1, !0),
        !0 === e.options.focusOnSelect && t(e.$slideTrack).children().on("click.slick", e.selectHandler),
        e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0),
        e.setPosition(),
        e.focusHandler(),
        e.paused = !e.options.autoplay,
        e.autoPlay(),
        e.$slider.trigger("reInit", [e])
    }
    ,
    i.prototype.resize = function() {
        var e = this;
        t(window).width() !== e.windowWidth && (clearTimeout(e.windowDelay),
        e.windowDelay = window.setTimeout(function() {
            e.windowWidth = t(window).width(),
            e.checkResponsive(),
            e.unslicked || e.setPosition()
        }, 50))
    }
    ,
    i.prototype.removeSlide = i.prototype.slickRemove = function(t, e, i) {
        var s = this;
        if (t = "boolean" == typeof t ? !0 === (e = t) ? 0 : s.slideCount - 1 : !0 === e ? --t : t,
        s.slideCount < 1 || t < 0 || t > s.slideCount - 1)
            return !1;
        s.unload(),
        !0 === i ? s.$slideTrack.children().remove() : s.$slideTrack.children(this.options.slide).eq(t).remove(),
        s.$slides = s.$slideTrack.children(this.options.slide),
        s.$slideTrack.children(this.options.slide).detach(),
        s.$slideTrack.append(s.$slides),
        s.$slidesCache = s.$slides,
        s.reinit()
    }
    ,
    i.prototype.setCSS = function(t) {
        var e, i, s = this, o = {};
        !0 === s.options.rtl && (t = -t),
        e = "left" == s.positionProp ? Math.ceil(t) + "px" : "0px",
        i = "top" == s.positionProp ? Math.ceil(t) + "px" : "0px",
        o[s.positionProp] = t,
        !1 === s.transformsEnabled ? s.$slideTrack.css(o) : (o = {},
        !1 === s.cssTransitions ? (o[s.animType] = "translate(" + e + ", " + i + ")",
        s.$slideTrack.css(o)) : (o[s.animType] = "translate3d(" + e + ", " + i + ", 0px)",
        s.$slideTrack.css(o)))
    }
    ,
    i.prototype.setDimensions = function() {
        var t = this;
        !1 === t.options.vertical ? !0 === t.options.centerMode && t.$list.css({
            padding: "0px " + t.options.centerPadding
        }) : (t.$list.height(t.$slides.first().outerHeight(!0) * t.options.slidesToShow),
        !0 === t.options.centerMode && t.$list.css({
            padding: t.options.centerPadding + " 0px"
        })),
        t.listWidth = t.$list.width(),
        t.listHeight = t.$list.height(),
        !1 === t.options.vertical && !1 === t.options.variableWidth ? (t.slideWidth = Math.ceil(t.listWidth / t.options.slidesToShow),
        t.$slideTrack.width(Math.ceil(t.slideWidth * t.$slideTrack.children(".slick-slide").length))) : !0 === t.options.variableWidth ? t.$slideTrack.width(5e3 * t.slideCount) : (t.slideWidth = Math.ceil(t.listWidth),
        t.$slideTrack.height(Math.ceil(t.$slides.first().outerHeight(!0) * t.$slideTrack.children(".slick-slide").length)));
        var e = t.$slides.first().outerWidth(!0) - t.$slides.first().width();
        !1 === t.options.variableWidth && t.$slideTrack.children(".slick-slide").width(t.slideWidth - e)
    }
    ,
    i.prototype.setFade = function() {
        var e, i = this;
        i.$slides.each(function(s, o) {
            e = -(i.slideWidth * s * 1),
            !0 === i.options.rtl ? t(o).css({
                position: "relative",
                right: e,
                top: 0,
                zIndex: i.options.zIndex - 2,
                opacity: 0
            }) : t(o).css({
                position: "relative",
                left: e,
                top: 0,
                zIndex: i.options.zIndex - 2,
                opacity: 0
            })
        }),
        i.$slides.eq(i.currentSlide).css({
            zIndex: i.options.zIndex - 1,
            opacity: 1
        })
    }
    ,
    i.prototype.setHeight = function() {
        if (1 === this.options.slidesToShow && !0 === this.options.adaptiveHeight && !1 === this.options.vertical) {
            var t = this.$slides.eq(this.currentSlide).outerHeight(!0);
            this.$list.css("height", t)
        }
    }
    ,
    i.prototype.setOption = i.prototype.slickSetOption = function() {
        var e, i, s, o, n, r = this, a = !1;
        if ("object" === t.type(arguments[0]) ? (s = arguments[0],
        a = arguments[1],
        n = "multiple") : "string" === t.type(arguments[0]) && (s = arguments[0],
        o = arguments[1],
        a = arguments[2],
        "responsive" === arguments[0] && "array" === t.type(arguments[1]) ? n = "responsive" : void 0 !== arguments[1] && (n = "single")),
        "single" === n)
            r.options[s] = o;
        else if ("multiple" === n)
            t.each(s, function(t, e) {
                r.options[t] = e
            });
        else if ("responsive" === n)
            for (i in o)
                if ("array" !== t.type(r.options.responsive))
                    r.options.responsive = [o[i]];
                else {
                    for (e = r.options.responsive.length - 1; e >= 0; )
                        r.options.responsive[e].breakpoint === o[i].breakpoint && r.options.responsive.splice(e, 1),
                        e--;
                    r.options.responsive.push(o[i])
                }
        a && (r.unload(),
        r.reinit())
    }
    ,
    i.prototype.setPosition = function() {
        this.setDimensions(),
        this.setHeight(),
        !1 === this.options.fade ? this.setCSS(this.getLeft(this.currentSlide)) : this.setFade(),
        this.$slider.trigger("setPosition", [this])
    }
    ,
    i.prototype.setProps = function() {
        var t = this
          , e = document.body.style;
        t.positionProp = !0 === t.options.vertical ? "top" : "left",
        "top" === t.positionProp ? t.$slider.addClass("slick-vertical") : t.$slider.removeClass("slick-vertical"),
        void 0 === e.WebkitTransition && void 0 === e.MozTransition && void 0 === e.msTransition || !0 === t.options.useCSS && (t.cssTransitions = !0),
        t.options.fade && ("number" == typeof t.options.zIndex ? t.options.zIndex < 3 && (t.options.zIndex = 3) : t.options.zIndex = t.defaults.zIndex),
        void 0 !== e.OTransform && (t.animType = "OTransform",
        t.transformType = "-o-transform",
        t.transitionType = "OTransition",
        void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (t.animType = !1)),
        void 0 !== e.MozTransform && (t.animType = "MozTransform",
        t.transformType = "-moz-transform",
        t.transitionType = "MozTransition",
        void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (t.animType = !1)),
        void 0 !== e.webkitTransform && (t.animType = "webkitTransform",
        t.transformType = "-webkit-transform",
        t.transitionType = "webkitTransition",
        void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (t.animType = !1)),
        void 0 !== e.msTransform && (t.animType = "msTransform",
        t.transformType = "-ms-transform",
        t.transitionType = "msTransition",
        void 0 === e.msTransform && (t.animType = !1)),
        void 0 !== e.transform && !1 !== t.animType && (t.animType = "transform",
        t.transformType = "transform",
        t.transitionType = "transition"),
        t.transformsEnabled = t.options.useTransform && null !== t.animType && !1 !== t.animType
    }
    ,
    i.prototype.setSlideClasses = function(t) {
        var e, i, s, o;
        if (i = this.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"),
        this.$slides.eq(t).addClass("slick-current"),
        !0 === this.options.centerMode) {
            var n = this.options.slidesToShow % 2 == 0 ? 1 : 0;
            e = Math.floor(this.options.slidesToShow / 2),
            !0 === this.options.infinite && (t >= e && t <= this.slideCount - 1 - e ? this.$slides.slice(t - e + n, t + e + 1).addClass("slick-active").attr("aria-hidden", "false") : (s = this.options.slidesToShow + t,
            i.slice(s - e + 1 + n, s + e + 2).addClass("slick-active").attr("aria-hidden", "false")),
            0 === t ? i.eq(i.length - 1 - this.options.slidesToShow).addClass("slick-center") : t === this.slideCount - 1 && i.eq(this.options.slidesToShow).addClass("slick-center")),
            this.$slides.eq(t).addClass("slick-center")
        } else
            t >= 0 && t <= this.slideCount - this.options.slidesToShow ? this.$slides.slice(t, t + this.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : i.length <= this.options.slidesToShow ? i.addClass("slick-active").attr("aria-hidden", "false") : (o = this.slideCount % this.options.slidesToShow,
            s = !0 === this.options.infinite ? this.options.slidesToShow + t : t,
            this.options.slidesToShow == this.options.slidesToScroll && this.slideCount - t < this.options.slidesToShow ? i.slice(s - (this.options.slidesToShow - o), s + o).addClass("slick-active").attr("aria-hidden", "false") : i.slice(s, s + this.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false"));
        "ondemand" !== this.options.lazyLoad && "anticipated" !== this.options.lazyLoad || this.lazyLoad()
    }
    ,
    i.prototype.setupInfinite = function() {
        var e, i, s, o = this;
        if (!0 === o.options.fade && (o.options.centerMode = !1),
        !0 === o.options.infinite && !1 === o.options.fade && (i = null,
        o.slideCount > o.options.slidesToShow)) {
            for (s = !0 === o.options.centerMode ? o.options.slidesToShow + 1 : o.options.slidesToShow,
            e = o.slideCount; e > o.slideCount - s; e -= 1)
                i = e - 1,
                t(o.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i - o.slideCount).prependTo(o.$slideTrack).addClass("slick-cloned");
            for (e = 0; e < s + o.slideCount; e += 1)
                i = e,
                t(o.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i + o.slideCount).appendTo(o.$slideTrack).addClass("slick-cloned");
            o.$slideTrack.find(".slick-cloned").find("[id]").each(function() {
                t(this).attr("id", "")
            })
        }
    }
    ,
    i.prototype.interrupt = function(t) {
        var e = this;
        t || e.autoPlay(),
        e.interrupted = t
    }
    ,
    i.prototype.selectHandler = function(e) {
        var i = parseInt((t(e.target).is(".slick-slide") ? t(e.target) : t(e.target).parents(".slick-slide")).attr("data-slick-index"));
        i || (i = 0),
        this.slideCount <= this.options.slidesToShow ? this.slideHandler(i, !1, !0) : this.slideHandler(i)
    }
    ,
    i.prototype.slideHandler = function(t, e, i) {
        var s, o, n, r, a, l = null, c = this;
        if (e = e || !1,
        !(!0 === c.animating && !0 === c.options.waitForAnimate || !0 === c.options.fade && c.currentSlide === t)) {
            if (!1 === e && c.asNavFor(t),
            s = t,
            l = c.getLeft(s),
            r = c.getLeft(c.currentSlide),
            c.currentLeft = null === c.swipeLeft ? r : c.swipeLeft,
            !1 === c.options.infinite && !1 === c.options.centerMode && (t < 0 || t > c.getDotCount() * c.options.slidesToScroll))
                !1 === c.options.fade && (s = c.currentSlide,
                !0 !== i ? c.animateSlide(r, function() {
                    c.postSlide(s)
                }) : c.postSlide(s));
            else if (!1 === c.options.infinite && !0 === c.options.centerMode && (t < 0 || t > c.slideCount - c.options.slidesToScroll))
                !1 === c.options.fade && (s = c.currentSlide,
                !0 !== i ? c.animateSlide(r, function() {
                    c.postSlide(s)
                }) : c.postSlide(s));
            else {
                if (c.options.autoplay && clearInterval(c.autoPlayTimer),
                o = s < 0 ? c.slideCount % c.options.slidesToScroll != 0 ? c.slideCount - c.slideCount % c.options.slidesToScroll : c.slideCount + s : s >= c.slideCount ? c.slideCount % c.options.slidesToScroll != 0 ? 0 : s - c.slideCount : s,
                c.animating = !0,
                c.$slider.trigger("beforeChange", [c, c.currentSlide, o]),
                n = c.currentSlide,
                c.currentSlide = o,
                c.setSlideClasses(c.currentSlide),
                c.options.asNavFor && (a = (a = c.getNavTarget()).slick("getSlick")).slideCount <= a.options.slidesToShow && a.setSlideClasses(c.currentSlide),
                c.updateDots(),
                c.updateArrows(),
                !0 === c.options.fade)
                    return !0 !== i ? (c.fadeSlideOut(n),
                    c.fadeSlide(o, function() {
                        c.postSlide(o)
                    })) : c.postSlide(o),
                    void c.animateHeight();
                !0 !== i ? c.animateSlide(l, function() {
                    c.postSlide(o)
                }) : c.postSlide(o)
            }
        }
    }
    ,
    i.prototype.startLoad = function() {
        !0 === this.options.arrows && this.slideCount > this.options.slidesToShow && (this.$prevArrow.hide(),
        this.$nextArrow.hide()),
        !0 === this.options.dots && this.slideCount > this.options.slidesToShow && this.$dots.hide(),
        this.$slider.addClass("slick-loading")
    }
    ,
    i.prototype.swipeDirection = function() {
        var t, e, i, s;
        return t = this.touchObject.startX - this.touchObject.curX,
        (s = Math.round(180 * (i = Math.atan2(e = this.touchObject.startY - this.touchObject.curY, t)) / Math.PI)) < 0 && (s = 360 - Math.abs(s)),
        s <= 45 && s >= 0 ? !1 === this.options.rtl ? "left" : "right" : s <= 360 && s >= 315 ? !1 === this.options.rtl ? "left" : "right" : s >= 135 && s <= 225 ? !1 === this.options.rtl ? "right" : "left" : !0 === this.options.verticalSwiping ? s >= 35 && s <= 135 ? "down" : "up" : "vertical"
    }
    ,
    i.prototype.swipeEnd = function(t) {
        var e, i, s = this;
        if (s.dragging = !1,
        s.swiping = !1,
        s.scrolling)
            return s.scrolling = !1,
            !1;
        if (s.interrupted = !1,
        s.shouldClick = !(s.touchObject.swipeLength > 10),
        void 0 === s.touchObject.curX)
            return !1;
        if (!0 === s.touchObject.edgeHit && s.$slider.trigger("edge", [s, s.swipeDirection()]),
        s.touchObject.swipeLength >= s.touchObject.minSwipe) {
            switch (i = s.swipeDirection()) {
            case "left":
            case "down":
                e = s.options.swipeToSlide ? s.checkNavigable(s.currentSlide + s.getSlideCount()) : s.currentSlide + s.getSlideCount(),
                s.currentDirection = 0;
                break;
            case "right":
            case "up":
                e = s.options.swipeToSlide ? s.checkNavigable(s.currentSlide - s.getSlideCount()) : s.currentSlide - s.getSlideCount(),
                s.currentDirection = 1
            }
            "vertical" != i && (s.slideHandler(e),
            s.touchObject = {},
            s.$slider.trigger("swipe", [s, i]))
        } else
            s.touchObject.startX !== s.touchObject.curX && (s.slideHandler(s.currentSlide),
            s.touchObject = {})
    }
    ,
    i.prototype.swipeHandler = function(t) {
        var e = this;
        if (!(!1 === e.options.swipe || "ontouchend"in document && !1 === e.options.swipe || !1 === e.options.draggable && -1 !== t.type.indexOf("mouse")))
            switch (e.touchObject.fingerCount = t.originalEvent && void 0 !== t.originalEvent.touches ? t.originalEvent.touches.length : 1,
            e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold,
            !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold),
            t.data.action) {
            case "start":
                e.swipeStart(t);
                break;
            case "move":
                e.swipeMove(t);
                break;
            case "end":
                e.swipeEnd(t)
            }
    }
    ,
    i.prototype.swipeMove = function(t) {
        var e, i, s, o, n, r, a = this;
        return n = void 0 !== t.originalEvent ? t.originalEvent.touches : null,
        !(!a.dragging || a.scrolling || n && 1 !== n.length) && (e = a.getLeft(a.currentSlide),
        a.touchObject.curX = void 0 !== n ? n[0].pageX : t.clientX,
        a.touchObject.curY = void 0 !== n ? n[0].pageY : t.clientY,
        a.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(a.touchObject.curX - a.touchObject.startX, 2))),
        r = Math.round(Math.sqrt(Math.pow(a.touchObject.curY - a.touchObject.startY, 2))),
        a.options.verticalSwiping || a.swiping || !(r > 4) ? (!0 === a.options.verticalSwiping && (a.touchObject.swipeLength = r),
        i = a.swipeDirection(),
        void 0 !== t.originalEvent && a.touchObject.swipeLength > 4 && (a.swiping = !0,
        t.preventDefault()),
        o = (!1 === a.options.rtl ? 1 : -1) * (a.touchObject.curX > a.touchObject.startX ? 1 : -1),
        !0 === a.options.verticalSwiping && (o = a.touchObject.curY > a.touchObject.startY ? 1 : -1),
        s = a.touchObject.swipeLength,
        a.touchObject.edgeHit = !1,
        !1 === a.options.infinite && (0 === a.currentSlide && "right" === i || a.currentSlide >= a.getDotCount() && "left" === i) && (s = a.touchObject.swipeLength * a.options.edgeFriction,
        a.touchObject.edgeHit = !0),
        !1 === a.options.vertical ? a.swipeLeft = e + s * o : a.swipeLeft = e + s * (a.$list.height() / a.listWidth) * o,
        !0 === a.options.verticalSwiping && (a.swipeLeft = e + s * o),
        !0 !== a.options.fade && !1 !== a.options.touchMove && (!0 === a.animating ? (a.swipeLeft = null,
        !1) : void a.setCSS(a.swipeLeft))) : (a.scrolling = !0,
        !1))
    }
    ,
    i.prototype.swipeStart = function(t) {
        var e, i = this;
        if (i.interrupted = !0,
        1 !== i.touchObject.fingerCount || i.slideCount <= i.options.slidesToShow)
            return i.touchObject = {},
            !1;
        void 0 !== t.originalEvent && void 0 !== t.originalEvent.touches && (e = t.originalEvent.touches[0]),
        i.touchObject.startX = i.touchObject.curX = void 0 !== e ? e.pageX : t.clientX,
        i.touchObject.startY = i.touchObject.curY = void 0 !== e ? e.pageY : t.clientY,
        i.dragging = !0
    }
    ,
    i.prototype.unfilterSlides = i.prototype.slickUnfilter = function() {
        null !== this.$slidesCache && (this.unload(),
        this.$slideTrack.children(this.options.slide).detach(),
        this.$slidesCache.appendTo(this.$slideTrack),
        this.reinit())
    }
    ,
    i.prototype.unload = function() {
        t(".slick-cloned", this.$slider).remove(),
        this.$dots && this.$dots.remove(),
        this.$prevArrow && this.htmlExpr.test(this.options.prevArrow) && this.$prevArrow.remove(),
        this.$nextArrow && this.htmlExpr.test(this.options.nextArrow) && this.$nextArrow.remove(),
        this.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
    }
    ,
    i.prototype.unslick = function(t) {
        this.$slider.trigger("unslick", [this, t]),
        this.destroy()
    }
    ,
    i.prototype.updateArrows = function() {
        this.options.slidesToShow,
        !0 === this.options.arrows && this.slideCount > this.options.slidesToShow && !this.options.infinite && (this.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
        this.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
        0 === this.currentSlide ? (this.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"),
        this.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : this.currentSlide >= this.slideCount - this.options.slidesToShow && !1 === this.options.centerMode ? (this.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"),
        this.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : this.currentSlide >= this.slideCount - 1 && !0 === this.options.centerMode && (this.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"),
        this.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
    }
    ,
    i.prototype.updateDots = function() {
        null !== this.$dots && (this.$dots.find("li").removeClass("slick-active").end(),
        this.$dots.find("li").eq(Math.floor(this.currentSlide / this.options.slidesToScroll)).addClass("slick-active"))
    }
    ,
    i.prototype.visibility = function() {
        var t = this;
        t.options.autoplay && (document[t.hidden] ? t.interrupted = !0 : t.interrupted = !1)
    }
    ,
    t.fn.slick = function() {
        var t, e, s = this, o = arguments[0], n = Array.prototype.slice.call(arguments, 1), r = s.length;
        for (t = 0; t < r; t++)
            if ("object" == typeof o || void 0 === o ? s[t].slick = new i(s[t],o) : e = s[t].slick[o].apply(s[t].slick, n),
            void 0 !== e)
                return e;
        return s
    }
}),
function(t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.AOS = e() : t.AOS = e()
}(this, function() {
    return function(t) {
        function e(s) {
            if (i[s])
                return i[s].exports;
            var o = i[s] = {
                exports: {},
                id: s,
                loaded: !1
            };
            return t[s].call(o.exports, o, o.exports, e),
            o.loaded = !0,
            o.exports
        }
        var i = {};
        return e.m = t,
        e.c = i,
        e.p = "dist/",
        e(0)
    }([function(t, e, i) {
        "use strict";
        function s(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }
        var o = Object.assign || function(t) {
            for (var e = 1; e < arguments.length; e++) {
                var i = arguments[e];
                for (var s in i)
                    Object.prototype.hasOwnProperty.call(i, s) && (t[s] = i[s])
            }
            return t
        }
          , n = i(1)
          , r = (s(n),
        i(6))
          , a = s(r)
          , l = i(7)
          , c = s(l)
          , d = i(8)
          , h = s(d)
          , u = i(9)
          , p = s(u)
          , f = i(10)
          , g = s(f)
          , m = i(11)
          , b = s(m)
          , v = i(14)
          , y = s(v)
          , $ = []
          , w = !1
          , _ = document.all && !window.atob
          , x = {
            offset: 120,
            delay: 0,
            easing: "ease",
            duration: 400,
            disable: !1,
            once: !1,
            startEvent: "DOMContentLoaded",
            throttleDelay: 99,
            debounceDelay: 50,
            disableMutationObserver: !1
        }
          , k = function() {
            var t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
            if (t && (w = !0),
            w)
                return $ = (0,
                b.default)($, x),
                (0,
                g.default)($, x.once),
                $
        }
          , S = function() {
            $ = (0,
            y.default)(),
            k()
        }
          , T = function() {
            $.forEach(function(t, e) {
                t.node.removeAttribute("data-aos"),
                t.node.removeAttribute("data-aos-easing"),
                t.node.removeAttribute("data-aos-duration"),
                t.node.removeAttribute("data-aos-delay")
            })
        }
          , C = function(t) {
            var e;
            return x = o(x, t),
            $ = (0,
            y.default)(),
            !0 === (e = x.disable) || "mobile" === e && p.default.mobile() || "phone" === e && p.default.phone() || "tablet" === e && p.default.tablet() || "function" == typeof e && !0 === e() || _ ? T() : (document.querySelector("body").setAttribute("data-aos-easing", x.easing),
            document.querySelector("body").setAttribute("data-aos-duration", x.duration),
            document.querySelector("body").setAttribute("data-aos-delay", x.delay),
            "DOMContentLoaded" === x.startEvent && ["complete", "interactive"].indexOf(document.readyState) > -1 ? k(!0) : "load" === x.startEvent ? window.addEventListener(x.startEvent, function() {
                k(!0)
            }) : document.addEventListener(x.startEvent, function() {
                k(!0)
            }),
            window.addEventListener("resize", (0,
            c.default)(k, x.debounceDelay, !0)),
            window.addEventListener("orientationchange", (0,
            c.default)(k, x.debounceDelay, !0)),
            window.addEventListener("scroll", (0,
            a.default)(function() {
                (0,
                g.default)($, x.once)
            }, x.throttleDelay)),
            x.disableMutationObserver || (0,
            h.default)("[data-aos]", S),
            $)
        };
        t.exports = {
            init: C,
            refresh: k,
            refreshHard: S
        }
    }
    , function(t, e) {}
    , , , , , function(t, e) {
        (function(e) {
            "use strict";
            function i(t) {
                var e = void 0 === t ? "undefined" : o(t);
                return !!t && ("object" == e || "function" == e)
            }
            function s(t) {
                if ("number" == typeof t)
                    return t;
                if ("symbol" == (void 0 === (e = t) ? "undefined" : o(e)) || (s = e) && "object" == (void 0 === s ? "undefined" : o(s)) && m.call(e) == a)
                    return r;
                if (i(t)) {
                    var e, s, n = "function" == typeof t.valueOf ? t.valueOf() : t;
                    t = i(n) ? n + "" : n
                }
                if ("string" != typeof t)
                    return 0 === t ? t : +t;
                t = t.replace(l, "");
                var p = d.test(t);
                return p || h.test(t) ? u(t.slice(2), p ? 2 : 8) : c.test(t) ? r : +t
            }
            var o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                return typeof t
            }
            : function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            }
              , n = "Expected a function"
              , r = NaN
              , a = "[object Symbol]"
              , l = /^\s+|\s+$/g
              , c = /^[-+]0x[0-9a-f]+$/i
              , d = /^0b[01]+$/i
              , h = /^0o[0-7]+$/i
              , u = parseInt
              , p = "object" == (void 0 === e ? "undefined" : o(e)) && e && e.Object === Object && e
              , f = "object" == ("undefined" == typeof self ? "undefined" : o(self)) && self && self.Object === Object && self
              , g = p || f || Function("return this")()
              , m = Object.prototype.toString
              , b = Math.max
              , v = Math.min
              , y = function() {
                return g.Date.now()
            };
            t.exports = function t(e, o, r) {
                var a = !0
                  , l = !0;
                if ("function" != typeof e)
                    throw TypeError(n);
                return i(r) && (a = "leading"in r ? !!r.leading : a,
                l = "trailing"in r ? !!r.trailing : l),
                function t(e, o, r) {
                    function a(t) {
                        var i = u
                          , s = p;
                        return u = p = void 0,
                        w = t,
                        g = e.apply(s, i)
                    }
                    function l(t) {
                        var e = t - $
                          , i = t - w;
                        return void 0 === $ || e >= o || e < 0 || x && i >= f
                    }
                    function c() {
                        var t, e, i, s, n = y();
                        return l(n) ? d(n) : void (m = setTimeout(c, (e = (t = n) - $,
                        i = t - w,
                        s = o - e,
                        x ? v(s, f - i) : s)))
                    }
                    function d(t) {
                        return m = void 0,
                        k && u ? a(t) : (u = p = void 0,
                        g)
                    }
                    function h() {
                        var t, e = y(), i = l(e);
                        if (u = arguments,
                        p = this,
                        $ = e,
                        i) {
                            if (void 0 === m)
                                return w = t = $,
                                m = setTimeout(c, o),
                                _ ? a(t) : g;
                            if (x)
                                return m = setTimeout(c, o),
                                a($)
                        }
                        return void 0 === m && (m = setTimeout(c, o)),
                        g
                    }
                    var u, p, f, g, m, $, w = 0, _ = !1, x = !1, k = !0;
                    if ("function" != typeof e)
                        throw TypeError(n);
                    return o = s(o) || 0,
                    i(r) && (_ = !!r.leading,
                    f = (x = "maxWait"in r) ? b(s(r.maxWait) || 0, o) : f,
                    k = "trailing"in r ? !!r.trailing : k),
                    h.cancel = function t() {
                        void 0 !== m && clearTimeout(m),
                        w = 0,
                        u = $ = p = m = void 0
                    }
                    ,
                    h.flush = function t() {
                        return void 0 === m ? g : d(y())
                    }
                    ,
                    h
                }(e, o, {
                    leading: a,
                    maxWait: o,
                    trailing: l
                })
            }
        }
        ).call(e, function() {
            return this
        }())
    }
    , function(t, e) {
        (function(e) {
            "use strict";
            function i(t) {
                var e = void 0 === t ? "undefined" : o(t);
                return !!t && ("object" == e || "function" == e)
            }
            function s(t) {
                if ("number" == typeof t)
                    return t;
                if ("symbol" == (void 0 === (e = t) ? "undefined" : o(e)) || (s = e) && "object" == (void 0 === s ? "undefined" : o(s)) && g.call(e) == r)
                    return n;
                if (i(t)) {
                    var e, s, u = "function" == typeof t.valueOf ? t.valueOf() : t;
                    t = i(u) ? u + "" : u
                }
                if ("string" != typeof t)
                    return 0 === t ? t : +t;
                t = t.replace(a, "");
                var p = c.test(t);
                return p || d.test(t) ? h(t.slice(2), p ? 2 : 8) : l.test(t) ? n : +t
            }
            var o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                return typeof t
            }
            : function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            }
              , n = NaN
              , r = "[object Symbol]"
              , a = /^\s+|\s+$/g
              , l = /^[-+]0x[0-9a-f]+$/i
              , c = /^0b[01]+$/i
              , d = /^0o[0-7]+$/i
              , h = parseInt
              , u = "object" == (void 0 === e ? "undefined" : o(e)) && e && e.Object === Object && e
              , p = "object" == ("undefined" == typeof self ? "undefined" : o(self)) && self && self.Object === Object && self
              , f = u || p || Function("return this")()
              , g = Object.prototype.toString
              , m = Math.max
              , b = Math.min
              , v = function() {
                return f.Date.now()
            };
            t.exports = function t(e, o, n) {
                function r(t) {
                    var i = h
                      , s = u;
                    return h = u = void 0,
                    $ = t,
                    f = e.apply(s, i)
                }
                function a(t) {
                    var e = t - y
                      , i = t - $;
                    return void 0 === y || e >= o || e < 0 || _ && i >= p
                }
                function l() {
                    var t, e, i, s, n = v();
                    return a(n) ? c(n) : void (g = setTimeout(l, (e = (t = n) - y,
                    i = t - $,
                    s = o - e,
                    _ ? b(s, p - i) : s)))
                }
                function c(t) {
                    return g = void 0,
                    x && h ? r(t) : (h = u = void 0,
                    f)
                }
                function d() {
                    var t, e = v(), i = a(e);
                    if (h = arguments,
                    u = this,
                    y = e,
                    i) {
                        if (void 0 === g)
                            return $ = t = y,
                            g = setTimeout(l, o),
                            w ? r(t) : f;
                        if (_)
                            return g = setTimeout(l, o),
                            r(y)
                    }
                    return void 0 === g && (g = setTimeout(l, o)),
                    f
                }
                var h, u, p, f, g, y, $ = 0, w = !1, _ = !1, x = !0;
                if ("function" != typeof e)
                    throw TypeError("Expected a function");
                return o = s(o) || 0,
                i(n) && (w = !!n.leading,
                p = (_ = "maxWait"in n) ? m(s(n.maxWait) || 0, o) : p,
                x = "trailing"in n ? !!n.trailing : x),
                d.cancel = function t() {
                    void 0 !== g && clearTimeout(g),
                    $ = 0,
                    h = y = u = g = void 0
                }
                ,
                d.flush = function t() {
                    return void 0 === g ? f : c(v())
                }
                ,
                d
            }
        }
        ).call(e, function() {
            return this
        }())
    }
    , function(t, e) {
        "use strict";
        function i(t) {
            t && t.forEach(function(t) {
                var e = Array.prototype.slice.call(t.addedNodes)
                  , i = Array.prototype.slice.call(t.removedNodes);
                e.concat(i).filter(function(t) {
                    return t.hasAttribute && t.hasAttribute("data-aos")
                }).length && n()
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var s = window.document
          , o = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver
          , n = function() {};
        e.default = function t(e, r) {
            var a = new o(i);
            n = r,
            a.observe(s.documentElement, {
                childList: !0,
                subtree: !0,
                removedNodes: !0
            })
        }
    }
    , function(t, e) {
        "use strict";
        function i() {
            return navigator.userAgent || navigator.vendor || window.opera || ""
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var s = function() {
            function t(t, e) {
                for (var i = 0; i < e.length; i++) {
                    var s = e[i];
                    s.enumerable = s.enumerable || !1,
                    s.configurable = !0,
                    "value"in s && (s.writable = !0),
                    Object.defineProperty(t, s.key, s)
                }
            }
            return function(e, i, s) {
                return i && t(e.prototype, i),
                s && t(e, s),
                e
            }
        }()
          , o = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
          , n = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
          , r = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i
          , a = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
          , l = function() {
            function t() {
                !function t(e, i) {
                    if (!(e instanceof i))
                        throw TypeError("Cannot call a class as a function")
                }(this, t)
            }
            return s(t, [{
                key: "phone",
                value: function() {
                    var t = i();
                    return !(!o.test(t) && !n.test(t.substr(0, 4)))
                }
            }, {
                key: "mobile",
                value: function() {
                    var t = i();
                    return !(!r.test(t) && !a.test(t.substr(0, 4)))
                }
            }, {
                key: "tablet",
                value: function() {
                    return this.mobile() && !this.phone()
                }
            }]),
            t
        }();
        e.default = new l
    }
    , function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var i = function(t, e, i) {
            var s = t.node.getAttribute("data-aos-once");
            e > t.position ? t.node.classList.add("aos-animate") : void 0 === s || "false" !== s && (i || "true" === s) || t.node.classList.remove("aos-animate")
        }
          , s = function(t, e) {
            var s = window.pageYOffset
              , o = window.innerHeight;
            t.forEach(function(t, n) {
                i(t, o + s, e)
            })
        };
        e.default = s
    }
    , function(t, e, i) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var s, o = (s = i(12)) && s.__esModule ? s : {
            default: s
        }, n = function(t, e) {
            return t.forEach(function(t, i) {
                t.node.classList.add("aos-init"),
                t.position = (0,
                o.default)(t.node, e.offset)
            }),
            t
        };
        e.default = n
    }
    , function(t, e, i) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var s, o = (s = i(13)) && s.__esModule ? s : {
            default: s
        }, n = function(t, e) {
            var i = 0
              , s = 0
              , n = window.innerHeight
              , r = {
                offset: t.getAttribute("data-aos-offset"),
                anchor: t.getAttribute("data-aos-anchor"),
                anchorPlacement: t.getAttribute("data-aos-anchor-placement")
            };
            switch (r.offset && !isNaN(r.offset) && (s = parseInt(r.offset)),
            r.anchor && document.querySelectorAll(r.anchor) && (t = document.querySelectorAll(r.anchor)[0]),
            i = (0,
            o.default)(t).top,
            r.anchorPlacement) {
            case "top-bottom":
                break;
            case "center-bottom":
                i += t.offsetHeight / 2;
                break;
            case "bottom-bottom":
                i += t.offsetHeight;
                break;
            case "top-center":
                i += n / 2;
                break;
            case "bottom-center":
                i += n / 2 + t.offsetHeight;
                break;
            case "center-center":
                i += n / 2 + t.offsetHeight / 2;
                break;
            case "top-top":
                i += n;
                break;
            case "bottom-top":
                i += t.offsetHeight + n;
                break;
            case "center-top":
                i += t.offsetHeight / 2 + n
            }
            return r.anchorPlacement || r.offset || isNaN(e) || (s = e),
            i + s
        };
        e.default = n
    }
    , function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var i = function(t) {
            for (var e = 0, i = 0; t && !isNaN(t.offsetLeft) && !isNaN(t.offsetTop); )
                e += t.offsetLeft - ("BODY" != t.tagName ? t.scrollLeft : 0),
                i += t.offsetTop - ("BODY" != t.tagName ? t.scrollTop : 0),
                t = t.offsetParent;
            return {
                top: i,
                left: e
            }
        };
        e.default = i
    }
    , function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var i = function(t) {
            return t = t || document.querySelectorAll("[data-aos]"),
            Array.prototype.map.call(t, function(t) {
                return {
                    node: t
                }
            })
        };
        e.default = i
    }
    ])
}),
function(t, e, i, s) {
    "use strict";
    var o, n, r, a, l, c, d, h, u, p, f, g, m;
    function b(t, e) {
        var s, o, n, r = [], a = 0;
        t && t.isDefaultPrevented() || (t.preventDefault(),
        e = e || {},
        t && t.data && (e = h(t.data.options, e)),
        s = e.$target || i(t.currentTarget).trigger("blur"),
        (n = i.fancybox.getInstance()) && n.$trigger && n.$trigger.is(s) || (r = e.selector ? i(e.selector) : (o = s.attr("data-fancybox") || "") ? (r = t.data ? t.data.items : []).length ? r.filter('[data-fancybox="' + o + '"]') : i('[data-fancybox="' + o + '"]') : [s],
        (a = i(r).index(s)) < 0 && (a = 0),
        (n = i.fancybox.open(r, e, a)).$trigger = s))
    }
    t.console = t.console || {
        info: function(t) {}
    },
    i && (i.fn.fancybox ? console.info("fancyBox already initialized") : (p = {
        closeExisting: !1,
        loop: !1,
        gutter: 50,
        keyboard: !0,
        preventCaptionOverlap: !0,
        arrows: !0,
        infobar: !0,
        smallBtn: "auto",
        toolbar: "auto",
        buttons: ["zoom", "slideShow", "thumbs", "close"],
        idleTime: 3,
        protect: !1,
        modal: !1,
        image: {
            preload: !1
        },
        ajax: {
            settings: {
                data: {
                    fancybox: !0
                }
            }
        },
        iframe: {
            tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""></iframe>',
            preload: !0,
            css: {},
            attr: {
                scrolling: "auto"
            }
        },
        video: {
            tpl: '<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos, <a href="<?php echo BASE_URL; ?>{{src}}">download</a> and watch with your favorite video player!</video>',
            format: "",
            autoStart: !0
        },
        defaultType: "image",
        animationEffect: "zoom",
        animationDuration: 366,
        zoomOpacity: "auto",
        transitionEffect: "fade",
        transitionDuration: 366,
        slideClass: "",
        baseClass: "",
        baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"><div class="fancybox-caption__body"></div></div></div></div>',
        spinnerTpl: '<div class="fancybox-loading"></div>',
        errorTpl: '<div class="fancybox-error"><p>{{ERROR}}</p></div>',
        btnTpl: {
            download: '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="<?php echo BASE_URL; ?>javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg></a>',
            zoom: '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg></button>',
            close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg></button>',
            arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div></button>',
            arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div></button>',
            smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg></button>'
        },
        parentEl: "body",
        hideScrollbar: !0,
        autoFocus: !0,
        backFocus: !0,
        trapFocus: !0,
        fullScreen: {
            autoStart: !1
        },
        touch: {
            vertical: !0,
            momentum: !0
        },
        hash: null,
        media: {},
        slideShow: {
            autoStart: !1,
            speed: 3e3
        },
        thumbs: {
            autoStart: !1,
            hideOnClose: !0,
            parentEl: ".fancybox-container",
            axis: "y"
        },
        wheel: "auto",
        onInit: i.noop,
        beforeLoad: i.noop,
        afterLoad: i.noop,
        beforeShow: i.noop,
        afterShow: i.noop,
        beforeClose: i.noop,
        afterClose: i.noop,
        onActivate: i.noop,
        onDeactivate: i.noop,
        clickContent: function(t, e) {
            return "image" === t.type && "zoom"
        },
        clickSlide: "close",
        clickOutside: "close",
        dblclickContent: !1,
        dblclickSlide: !1,
        dblclickOutside: !1,
        mobile: {
            preventCaptionOverlap: !1,
            idleTime: !1,
            clickContent: function(t, e) {
                return "image" === t.type && "toggleControls"
            },
            clickSlide: function(t, e) {
                return "image" === t.type ? "toggleControls" : "close"
            },
            dblclickContent: function(t, e) {
                return "image" === t.type && "zoom"
            },
            dblclickSlide: function(t, e) {
                return "image" === t.type && "zoom"
            }
        },
        lang: "en",
        i18n: {
            en: {
                CLOSE: "Close",
                NEXT: "Next",
                PREV: "Previous",
                ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                PLAY_START: "Start slideshow",
                PLAY_STOP: "Pause slideshow",
                FULL_SCREEN: "Full screen",
                THUMBS: "Thumbnails",
                DOWNLOAD: "Download",
                SHARE: "Share",
                ZOOM: "Zoom"
            },
            de: {
                CLOSE: "Schlie&szlig;en",
                NEXT: "Weiter",
                PREV: "Zur&uuml;ck",
                ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",
                PLAY_START: "Diaschau starten",
                PLAY_STOP: "Diaschau beenden",
                FULL_SCREEN: "Vollbild",
                THUMBS: "Vorschaubilder",
                DOWNLOAD: "Herunterladen",
                SHARE: "Teilen",
                ZOOM: "Vergr&ouml;&szlig;ern"
            }
        }
    },
    o = i(t),
    n = i(e),
    r = 0,
    a = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function(e) {
        return t.setTimeout(e, 1e3 / 60)
    }
    ,
    l = t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function(e) {
        t.clearTimeout(e)
    }
    ,
    c = function() {
        var t, i = e.createElement("fakeelement"), o = {
            transition: "transitionend",
            OTransition: "oTransitionEnd",
            MozTransition: "transitionend",
            WebkitTransition: "webkitTransitionEnd"
        };
        for (t in o)
            if (i.style[t] !== s)
                return o[t];
        return "transitionend"
    }(),
    d = function(t) {
        return t && t.length && t[0].offsetHeight
    }
    ,
    h = function(t, e) {
        var s = i.extend(!0, {}, t, e);
        return i.each(e, function(t, e) {
            i.isArray(e) && (s[t] = e)
        }),
        s
    }
    ,
    u = function(t, e, s) {
        var o = this;
        o.opts = h({
            index: s
        }, i.fancybox.defaults),
        i.isPlainObject(e) && (o.opts = h(o.opts, e)),
        i.fancybox.isMobile && (o.opts = h(o.opts, o.opts.mobile)),
        o.id = o.opts.id || ++r,
        o.currIndex = parseInt(o.opts.index, 10) || 0,
        o.prevIndex = null,
        o.prevPos = null,
        o.currPos = 0,
        o.firstRun = !0,
        o.group = [],
        o.slides = {},
        o.addContent(t),
        o.group.length && o.init()
    }
    ,
    i.extend(u.prototype, {
        init: function() {
            var s, o, n = this, r = n.group[n.currIndex].opts;
            r.closeExisting && i.fancybox.close(!0),
            i("body").addClass("fancybox-active"),
            i.fancybox.getInstance() || !1 === r.hideScrollbar || i.fancybox.isMobile || !(e.body.scrollHeight > t.innerHeight) || (i("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:' + (t.innerWidth - e.documentElement.clientWidth) + "px;}</style>"),
            i("body").addClass("compensate-for-scrollbar")),
            o = "",
            i.each(r.buttons, function(t, e) {
                o += r.btnTpl[e] || ""
            }),
            s = i(n.translate(n, r.baseTpl.replace("{{buttons}}", o).replace("{{arrows}}", r.btnTpl.arrowLeft + r.btnTpl.arrowRight))).attr("id", "fancybox-container-" + n.id).addClass(r.baseClass).data("FancyBox", n).appendTo(r.parentEl),
            n.$refs = {
                container: s
            },
            ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function(t) {
                n.$refs[t] = s.find(".fancybox-" + t)
            }),
            n.trigger("onInit"),
            n.activate(),
            n.jumpTo(n.currIndex)
        },
        translate: function(t, e) {
            var i = t.opts.i18n[t.opts.lang] || t.opts.i18n.en;
            return e.replace(/\{\{(\w+)\}\}/g, function(t, e) {
                return i[e] === s ? t : i[e]
            })
        },
        addContent: function(t) {
            var e = this
              , t = i.makeArray(t);
            i.each(t, function(t, o) {
                var n, r, a, l = {}, c = {};
                i.isPlainObject(o) ? c = (l = o).opts || o : "object" === i.type(o) && i(o).length ? (c = (r = i(o)).data() || {},
                (c = i.extend(!0, {}, c, c.options)).$orig = r,
                l.src = e.opts.src || c.src || r.attr("href"),
                l.type || l.src || (l.type = "inline",
                l.src = o)) : l = {
                    type: "html",
                    src: o + ""
                },
                l.opts = i.extend(!0, {}, e.opts, c),
                i.isArray(c.buttons) && (l.opts.buttons = c.buttons),
                i.fancybox.isMobile && l.opts.mobile && (l.opts = h(l.opts, l.opts.mobile)),
                n = l.type || l.opts.type,
                r = l.src || "",
                !n && r && ((c = r.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i)) ? (n = "video",
                l.opts.video.format || (l.opts.video.format = "video/" + ("ogv" === c[1] ? "ogg" : c[1]))) : r.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? n = "image" : r.match(/\.(pdf)((\?|#).*)?$/i) ? (n = "iframe",
                l = i.extend(!0, l, {
                    contentType: "pdf",
                    opts: {
                        iframe: {
                            preload: !1
                        }
                    }
                })) : "#" === r.charAt(0) && (n = "inline")),
                n ? l.type = n : e.trigger("objectNeedsType", l),
                l.contentType || (l.contentType = -1 < i.inArray(l.type, ["html", "inline", "ajax"]) ? "html" : l.type),
                l.index = e.group.length,
                "auto" == l.opts.smallBtn && (l.opts.smallBtn = -1 < i.inArray(l.type, ["html", "inline", "ajax"])),
                "auto" === l.opts.toolbar && (l.opts.toolbar = !l.opts.smallBtn),
                l.$thumb = l.opts.$thumb || null,
                l.opts.$trigger && l.index === e.opts.index && (l.$thumb = l.opts.$trigger.find("img:first"),
                l.$thumb.length && (l.opts.$orig = l.opts.$trigger)),
                l.$thumb && l.$thumb.length || !l.opts.$orig || (l.$thumb = l.opts.$orig.find("img:first")),
                l.$thumb && !l.$thumb.length && (l.$thumb = null),
                l.thumb = l.opts.thumb || (l.$thumb ? l.$thumb[0].src : null),
                "function" === i.type(l.opts.caption) && (l.opts.caption = l.opts.caption.apply(o, [e, l])),
                "function" === i.type(e.opts.caption) && (l.opts.caption = e.opts.caption.apply(o, [e, l])),
                l.opts.caption instanceof i || (l.opts.caption = l.opts.caption === s ? "" : l.opts.caption + ""),
                "ajax" === l.type && 1 < (a = r.split(/\s+/, 2)).length && (l.src = a.shift(),
                l.opts.filter = a.shift()),
                l.opts.modal && (l.opts = i.extend(!0, l.opts, {
                    trapFocus: !0,
                    infobar: 0,
                    toolbar: 0,
                    smallBtn: 0,
                    keyboard: 0,
                    slideShow: 0,
                    fullScreen: 0,
                    thumbs: 0,
                    touch: 0,
                    clickContent: !1,
                    clickSlide: !1,
                    clickOutside: !1,
                    dblclickContent: !1,
                    dblclickSlide: !1,
                    dblclickOutside: !1
                })),
                e.group.push(l)
            }),
            Object.keys(e.slides).length && (e.updateControls(),
            (t = e.Thumbs) && t.isActive && (t.create(),
            t.focus()))
        },
        addEvents: function() {
            var e = this;
            e.removeEvents(),
            e.$refs.container.on("click.fb-close", "[data-fancybox-close]", function(t) {
                t.stopPropagation(),
                t.preventDefault(),
                e.close(t)
            }).on("touchstart.fb-prev click.fb-prev", "[data-fancybox-prev]", function(t) {
                t.stopPropagation(),
                t.preventDefault(),
                e.previous()
            }).on("touchstart.fb-next click.fb-next", "[data-fancybox-next]", function(t) {
                t.stopPropagation(),
                t.preventDefault(),
                e.next()
            }).on("click.fb", "[data-fancybox-zoom]", function(t) {
                e[e.isScaledDown() ? "scaleToActual" : "scaleToFit"]()
            }),
            o.on("orientationchange.fb resize.fb", function(t) {
                t && t.originalEvent && "resize" === t.originalEvent.type ? (e.requestId && l(e.requestId),
                e.requestId = a(function() {
                    e.update(t)
                })) : (e.current && "iframe" === e.current.type && e.$refs.stage.hide(),
                setTimeout(function() {
                    e.$refs.stage.show(),
                    e.update(t)
                }, i.fancybox.isMobile ? 600 : 250))
            }),
            n.on("keydown.fb", function(t) {
                var s = (i.fancybox ? i.fancybox.getInstance() : null).current
                  , o = t.keyCode || t.which;
                if (9 != o) {
                    if (!(!s.opts.keyboard || t.ctrlKey || t.altKey || t.shiftKey || i(t.target).is("input,textarea,video,audio,select")))
                        return 8 === o || 27 === o ? (t.preventDefault(),
                        void e.close(t)) : 37 === o || 38 === o ? (t.preventDefault(),
                        void e.previous()) : 39 === o || 40 === o ? (t.preventDefault(),
                        void e.next()) : void e.trigger("afterKeydown", t, o)
                } else
                    s.opts.trapFocus && e.focus(t)
            }),
            e.group[e.currIndex].opts.idleTime && (e.idleSecondsCounter = 0,
            n.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function(t) {
                e.idleSecondsCounter = 0,
                e.isIdle && e.showControls(),
                e.isIdle = !1
            }),
            e.idleInterval = t.setInterval(function() {
                e.idleSecondsCounter++,
                e.idleSecondsCounter >= e.group[e.currIndex].opts.idleTime && !e.isDragging && (e.isIdle = !0,
                e.idleSecondsCounter = 0,
                e.hideControls())
            }, 1e3))
        },
        removeEvents: function() {
            o.off("orientationchange.fb resize.fb"),
            n.off("keydown.fb .fb-idle"),
            this.$refs.container.off(".fb-close .fb-prev .fb-next"),
            this.idleInterval && (t.clearInterval(this.idleInterval),
            this.idleInterval = null)
        },
        previous: function(t) {
            return this.jumpTo(this.currPos - 1, t)
        },
        next: function(t) {
            return this.jumpTo(this.currPos + 1, t)
        },
        jumpTo: function(t, e) {
            var o, n, r, a, l, c, h, u, p = this, f = p.group.length;
            if (!(p.isDragging || p.isClosing || p.isAnimating && p.firstRun))
                return t = parseInt(t, 10),
                !(!(n = (p.current || p).opts.loop) && (t < 0 || f <= t)) && (o = p.firstRun = !Object.keys(p.slides).length,
                a = p.current,
                p.prevIndex = p.currIndex,
                p.prevPos = p.currPos,
                r = p.createSlide(t),
                1 < f && ((n || r.index < f - 1) && p.createSlide(t + 1),
                (n || 0 < r.index) && p.createSlide(t - 1)),
                p.current = r,
                p.currIndex = r.index,
                p.currPos = r.pos,
                p.trigger("beforeShow", o),
                p.updateControls(),
                r.forcedDuration = s,
                i.isNumeric(e) ? r.forcedDuration = e : e = r.opts[o ? "animationDuration" : "transitionDuration"],
                e = parseInt(e, 10),
                t = p.isMoved(r),
                r.$slide.addClass("fancybox-slide--current"),
                o ? (r.opts.animationEffect && e && p.$refs.container.css("transition-duration", e + "ms"),
                p.$refs.container.addClass("fancybox-is-open").trigger("focus"),
                p.loadSlide(r)) : (l = i.fancybox.getTranslate(a.$slide),
                c = i.fancybox.getTranslate(p.$refs.stage),
                i.each(p.slides, function(t, e) {
                    i.fancybox.stop(e.$slide, !0)
                }),
                a.pos !== r.pos && (a.isComplete = !1),
                a.$slide.removeClass("fancybox-slide--complete fancybox-slide--current"),
                t ? (u = l.left - (a.pos * l.width + a.pos * a.opts.gutter),
                i.each(p.slides, function(t, s) {
                    s.$slide.removeClass("fancybox-animated").removeClass(function(t, e) {
                        return (e.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ")
                    });
                    var o = s.pos * l.width + s.pos * s.opts.gutter;
                    i.fancybox.setTranslate(s.$slide, {
                        top: 0,
                        left: o - c.left + u
                    }),
                    s.pos !== r.pos && s.$slide.addClass("fancybox-slide--" + (s.pos > r.pos ? "next" : "previous")),
                    d(s.$slide),
                    i.fancybox.animate(s.$slide, {
                        top: 0,
                        left: (s.pos - r.pos) * l.width + (s.pos - r.pos) * s.opts.gutter
                    }, e, function() {
                        s.$slide.css({
                            transform: "",
                            opacity: ""
                        }).removeClass("fancybox-slide--next fancybox-slide--previous"),
                        s.pos === p.currPos && p.complete()
                    })
                })) : e && r.opts.transitionEffect && (h = "fancybox-animated fancybox-fx-" + r.opts.transitionEffect,
                a.$slide.addClass("fancybox-slide--" + (a.pos > r.pos ? "next" : "previous")),
                i.fancybox.animate(a.$slide, h, e, function() {
                    a.$slide.removeClass(h).removeClass("fancybox-slide--next fancybox-slide--previous")
                }, !1)),
                r.isLoaded ? p.revealContent(r) : p.loadSlide(r)),
                void p.preload("image"))
        },
        createSlide: function(t) {
            var e, s = this, o = t % s.group.length;
            return o = o < 0 ? s.group.length + o : o,
            !s.slides[t] && s.group[o] && (e = i('<div class="fancybox-slide"></div>').appendTo(s.$refs.stage),
            s.slides[t] = i.extend(!0, {}, s.group[o], {
                pos: t,
                $slide: e,
                isLoaded: !1
            }),
            s.updateSlide(s.slides[t])),
            s.slides[t]
        },
        scaleToActual: function(t, e, o) {
            var n, r, a, l, c = this, d = c.current, h = d.$content, u = i.fancybox.getTranslate(d.$slide).width, p = i.fancybox.getTranslate(d.$slide).height, f = d.width, g = d.height;
            c.isAnimating || c.isMoved() || !h || "image" != d.type || !d.isLoaded || d.hasError || (c.isAnimating = !0,
            i.fancybox.stop(h),
            t = t === s ? .5 * u : t,
            e = e === s ? .5 * p : e,
            (n = i.fancybox.getTranslate(h)).top -= i.fancybox.getTranslate(d.$slide).top,
            n.left -= i.fancybox.getTranslate(d.$slide).left,
            a = f / n.width,
            l = g / n.height,
            r = .5 * u - .5 * f,
            d = .5 * p - .5 * g,
            u < f && (0 < (r = n.left * a - (t * a - t)) && (r = 0),
            r < u - f && (r = u - f)),
            p < g && (0 < (d = n.top * l - (e * l - e)) && (d = 0),
            d < p - g && (d = p - g)),
            c.updateCursor(f, g),
            i.fancybox.animate(h, {
                top: d,
                left: r,
                scaleX: a,
                scaleY: l
            }, o || 366, function() {
                c.isAnimating = !1
            }),
            c.SlideShow && c.SlideShow.isActive && c.SlideShow.stop())
        },
        scaleToFit: function(t) {
            var e = this
              , s = e.current
              , o = s.$content;
            e.isAnimating || e.isMoved() || !o || "image" != s.type || !s.isLoaded || s.hasError || (e.isAnimating = !0,
            i.fancybox.stop(o),
            s = e.getFitPos(s),
            e.updateCursor(s.width, s.height),
            i.fancybox.animate(o, {
                top: s.top,
                left: s.left,
                scaleX: s.width / o.width(),
                scaleY: s.height / o.height()
            }, t || 366, function() {
                e.isAnimating = !1
            }))
        },
        getFitPos: function(t) {
            var e, s, o = t.$content, n = t.$slide, r = t.width || t.opts.width, a = t.height || t.opts.height, l = {};
            return !!(t.isLoaded && o && o.length) && (e = i.fancybox.getTranslate(this.$refs.stage).width,
            s = i.fancybox.getTranslate(this.$refs.stage).height,
            e -= parseFloat(n.css("paddingLeft")) + parseFloat(n.css("paddingRight")) + parseFloat(o.css("marginLeft")) + parseFloat(o.css("marginRight")),
            s -= parseFloat(n.css("paddingTop")) + parseFloat(n.css("paddingBottom")) + parseFloat(o.css("marginTop")) + parseFloat(o.css("marginBottom")),
            r && a || (r = e,
            a = s),
            e - .5 < (r *= o = Math.min(1, e / r, s / a)) && (r = e),
            s - .5 < (a *= o) && (a = s),
            "image" === t.type ? (l.top = Math.floor(.5 * (s - a)) + parseFloat(n.css("paddingTop")),
            l.left = Math.floor(.5 * (e - r)) + parseFloat(n.css("paddingLeft"))) : "video" === t.contentType && (r / (t = t.opts.width && t.opts.height ? r / a : t.opts.ratio || 16 / 9) < a ? a = r / t : a * t < r && (r = a * t)),
            l.width = r,
            l.height = a,
            l)
        },
        update: function(t) {
            var e = this;
            i.each(e.slides, function(i, s) {
                e.updateSlide(s, t)
            })
        },
        updateSlide: function(t, e) {
            var s = this
              , o = t && t.$content
              , n = t.width || t.opts.width
              , r = t.height || t.opts.height
              , a = t.$slide;
            s.adjustCaption(t),
            o && (n || r || "video" === t.contentType) && !t.hasError && (i.fancybox.stop(o),
            i.fancybox.setTranslate(o, s.getFitPos(t)),
            t.pos === s.currPos && (s.isAnimating = !1,
            s.updateCursor())),
            s.adjustLayout(t),
            a.length && (a.trigger("refresh"),
            t.pos === s.currPos && s.$refs.toolbar.add(s.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar", a.get(0).scrollHeight > a.get(0).clientHeight)),
            s.trigger("onUpdate", t, e)
        },
        centerSlide: function(t) {
            var e = this
              , o = e.current
              , n = o.$slide;
            !e.isClosing && o && (n.siblings().css({
                transform: "",
                opacity: ""
            }),
            n.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next"),
            i.fancybox.animate(n, {
                top: 0,
                left: 0,
                opacity: 1
            }, t === s ? 0 : t, function() {
                n.css({
                    transform: "",
                    opacity: ""
                }),
                o.isComplete || e.complete()
            }, !1))
        },
        isMoved: function(t) {
            var e, s = t || this.current;
            return !!s && (e = i.fancybox.getTranslate(this.$refs.stage),
            t = i.fancybox.getTranslate(s.$slide),
            !s.$slide.hasClass("fancybox-animated") && (.5 < Math.abs(t.top - e.top) || .5 < Math.abs(t.left - e.left)))
        },
        updateCursor: function(t, e) {
            var s = this.current
              , o = this.$refs.container;
            s && !this.isClosing && this.Guestures && (o.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"),
            e = !!(t = this.canPan(t, e)) || this.isZoomable(),
            o.toggleClass("fancybox-is-zoomable", e),
            i("[data-fancybox-zoom]").prop("disabled", !e),
            t ? o.addClass("fancybox-can-pan") : e && ("zoom" === s.opts.clickContent || i.isFunction(s.opts.clickContent) && "zoom" == s.opts.clickContent(s)) ? o.addClass("fancybox-can-zoomIn") : s.opts.touch && (s.opts.touch.vertical || 1 < this.group.length) && "video" !== s.contentType && o.addClass("fancybox-can-swipe"))
        },
        isZoomable: function() {
            var t, e = this.current;
            return !!(e && !this.isClosing && "image" === e.type && !e.hasError && (!e.isLoaded || (t = this.getFitPos(e)) && (e.width > t.width || e.height > t.height)))
        },
        isScaledDown: function(t, e) {
            var o = !1
              , n = this.current
              , r = n.$content;
            return t !== s && e !== s ? o = t < n.width && e < n.height : r && (o = (o = i.fancybox.getTranslate(r)).width < n.width && o.height < n.height),
            o
        },
        canPan: function(t, e) {
            var o = this.current
              , n = null
              , r = !1;
            return "image" === o.type && (o.isComplete || t && e) && !o.hasError && (r = this.getFitPos(o),
            t !== s && e !== s ? n = {
                width: t,
                height: e
            } : o.isComplete && (n = i.fancybox.getTranslate(o.$content)),
            n && r && (r = 1.5 < Math.abs(n.width - r.width) || 1.5 < Math.abs(n.height - r.height))),
            r
        },
        loadSlide: function(t) {
            var e, s, o, n = this;
            if (!t.isLoading && !t.isLoaded) {
                if (t.isLoading = !0,
                !1 === n.trigger("beforeLoad", t))
                    return t.isLoading = !1;
                switch (e = t.type,
                (s = t.$slide).off("refresh").trigger("onReset").addClass(t.opts.slideClass),
                e) {
                case "image":
                    n.setImage(t);
                    break;
                case "iframe":
                    n.setIframe(t);
                    break;
                case "html":
                    n.setContent(t, t.src || t.content);
                    break;
                case "video":
                    n.setContent(t, t.opts.video.tpl.replace(/\{\{src\}\}/gi, t.src).replace("{{format}}", t.opts.videoFormat || t.opts.video.format || "").replace("{{poster}}", t.thumb || ""));
                    break;
                case "inline":
                    i(t.src).length ? n.setContent(t, i(t.src)) : n.setError(t);
                    break;
                case "ajax":
                    n.showLoading(t),
                    o = i.ajax(i.extend({}, t.opts.ajax.settings, {
                        url: t.src,
                        success: function(e, i) {
                            "success" === i && n.setContent(t, e)
                        },
                        error: function(e, i) {
                            e && "abort" !== i && n.setError(t)
                        }
                    })),
                    s.one("onReset", function() {
                        o.abort()
                    });
                    break;
                default:
                    n.setError(t)
                }
                return !0
            }
        },
        setImage: function(t) {
            var s, o = this;
            setTimeout(function() {
                var e = t.$image;
                o.isClosing || !t.isLoading || e && e.length && e[0].complete || t.hasError || o.showLoading(t)
            }, 50),
            o.checkSrcset(t),
            t.$content = i('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(t.$slide.addClass("fancybox-slide--image")),
            !1 !== t.opts.preload && t.opts.width && t.opts.height && t.thumb && (t.width = t.opts.width,
            t.height = t.opts.height,
            (s = e.createElement("img")).onerror = function() {
                i(this).remove(),
                t.$ghost = null
            }
            ,
            s.onload = function() {
                o.afterLoad(t)
            }
            ,
            t.$ghost = i(s).addClass("fancybox-image").appendTo(t.$content).attr("src", t.thumb)),
            o.setBigImage(t)
        },
        checkSrcset: function(e) {
            var i, s, o, n, r = e.opts.srcset || e.opts.image.srcset;
            if (r) {
                o = t.devicePixelRatio || 1,
                n = t.innerWidth * o,
                (s = r.split(",").map(function(t) {
                    var e = {};
                    return t.trim().split(/\s+/).forEach(function(t, i) {
                        var s = parseInt(t.substring(0, t.length - 1), 10);
                        if (0 === i)
                            return e.url = t;
                        s && (e.value = s,
                        e.postfix = t[t.length - 1])
                    }),
                    e
                })).sort(function(t, e) {
                    return t.value - e.value
                });
                for (var a = 0; a < s.length; a++) {
                    var l = s[a];
                    if ("w" === l.postfix && l.value >= n || "x" === l.postfix && l.value >= o) {
                        i = l;
                        break
                    }
                }
                !i && s.length && (i = s[s.length - 1]),
                i && (e.src = i.url,
                e.width && e.height && "w" == i.postfix && (e.height = e.width / e.height * i.value,
                e.width = i.value),
                e.opts.srcset = r)
            }
        },
        setBigImage: function(t) {
            var s = this
              , n = e.createElement("img")
              , r = i(n);
            t.$image = r.one("error", function() {
                s.setError(t)
            }).one("load", function() {
                var e;
                t.$ghost || (s.resolveImageSlideSize(t, this.naturalWidth, this.naturalHeight),
                s.afterLoad(t)),
                s.isClosing || (t.opts.srcset && ((e = t.opts.sizes) && "auto" !== e || (e = (1 < t.width / t.height && 1 < o.width() / o.height() ? "100" : Math.round(t.width / t.height * 100)) + "vw"),
                r.attr("sizes", e).attr("srcset", t.opts.srcset)),
                t.$ghost && setTimeout(function() {
                    t.$ghost && !s.isClosing && t.$ghost.hide()
                }, Math.min(300, Math.max(1e3, t.height / 1600))),
                s.hideLoading(t))
            }).addClass("fancybox-image").attr("src", t.src).appendTo(t.$content),
            (n.complete || "complete" == n.readyState) && r.naturalWidth && r.naturalHeight ? r.trigger("load") : n.error && r.trigger("error")
        },
        resolveImageSlideSize: function(t, e, i) {
            var s = parseInt(t.opts.width, 10)
              , o = parseInt(t.opts.height, 10);
            t.width = e,
            t.height = i,
            0 < s && (t.width = s,
            t.height = Math.floor(s * i / e)),
            0 < o && (t.width = Math.floor(o * e / i),
            t.height = o)
        },
        setIframe: function(t) {
            var e, o = this, n = t.opts.iframe, r = t.$slide;
            t.$content = i('<div class="fancybox-content' + (n.preload ? " fancybox-is-hidden" : "") + '"></div>').css(n.css).appendTo(r),
            r.addClass("fancybox-slide--" + t.contentType),
            t.$iframe = e = i(n.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(n.attr).appendTo(t.$content),
            n.preload ? (o.showLoading(t),
            e.on("load.fb error.fb", function(e) {
                this.isReady = 1,
                t.$slide.trigger("refresh"),
                o.afterLoad(t)
            }),
            r.on("refresh.fb", function() {
                var i, o = t.$content, a = n.css.width, l = n.css.height;
                if (1 === e[0].isReady) {
                    try {
                        i = e.contents().find("body")
                    } catch (c) {}
                    i && i.length && i.children().length && (r.css("overflow", "visible"),
                    o.css({
                        width: "100%",
                        "max-width": "100%",
                        height: "9999px"
                    }),
                    a === s && (a = Math.ceil(Math.max(i[0].clientWidth, i.outerWidth(!0)))),
                    o.css("width", a || "").css("max-width", ""),
                    l === s && (l = Math.ceil(Math.max(i[0].clientHeight, i.outerHeight(!0)))),
                    o.css("height", l || ""),
                    r.css("overflow", "auto")),
                    o.removeClass("fancybox-is-hidden")
                }
            })) : o.afterLoad(t),
            e.attr("src", t.src),
            r.one("onReset", function() {
                try {
                    i(this).find("iframe").hide().unbind().attr("src", "//about:blank")
                } catch (e) {}
                i(this).off("refresh.fb").empty(),
                t.isLoaded = !1,
                t.isRevealed = !1
            })
        },
        setContent: function(t, e) {
            var s;
            this.isClosing || (this.hideLoading(t),
            t.$content && i.fancybox.stop(t.$content),
            t.$slide.empty(),
            (s = e) && s.hasOwnProperty && s instanceof i && e.parent().length ? ((e.hasClass("fancybox-content") || e.parent().hasClass("fancybox-content")) && e.parents(".fancybox-slide").trigger("onReset"),
            t.$placeholder = i("<div>").hide().insertAfter(e),
            e.css("display", "inline-block")) : t.hasError || ("string" === i.type(e) && (e = i("<div>").append(i.trim(e)).contents()),
            t.opts.filter && (e = i("<div>").html(e).find(t.opts.filter))),
            t.$slide.one("onReset", function() {
                i(this).find("video,audio").trigger("pause"),
                t.$placeholder && (t.$placeholder.after(e.removeClass("fancybox-content").hide()).remove(),
                t.$placeholder = null),
                t.$smallBtn && (t.$smallBtn.remove(),
                t.$smallBtn = null),
                t.hasError || (i(this).empty(),
                t.isLoaded = !1,
                t.isRevealed = !1)
            }),
            i(e).appendTo(t.$slide),
            i(e).is("video,audio") && (i(e).addClass("fancybox-video"),
            i(e).wrap("<div></div>"),
            t.contentType = "video",
            t.opts.width = t.opts.width || i(e).attr("width"),
            t.opts.height = t.opts.height || i(e).attr("height")),
            t.$content = t.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first(),
            t.$content.siblings().hide(),
            t.$content.length || (t.$content = t.$slide.wrapInner("<div></div>").children().first()),
            t.$content.addClass("fancybox-content"),
            t.$slide.addClass("fancybox-slide--" + t.contentType),
            this.afterLoad(t))
        },
        setError: function(t) {
            t.hasError = !0,
            t.$slide.trigger("onReset").removeClass("fancybox-slide--" + t.contentType).addClass("fancybox-slide--error"),
            t.contentType = "html",
            this.setContent(t, this.translate(t, t.opts.errorTpl)),
            t.pos === this.currPos && (this.isAnimating = !1)
        },
        showLoading: function(t) {
            (t = t || this.current) && !t.$spinner && (t.$spinner = i(this.translate(this, this.opts.spinnerTpl)).appendTo(t.$slide).hide().fadeIn("fast"))
        },
        hideLoading: function(t) {
            (t = t || this.current) && t.$spinner && (t.$spinner.stop().remove(),
            delete t.$spinner)
        },
        afterLoad: function(t) {
            this.isClosing || (t.isLoading = !1,
            t.isLoaded = !0,
            this.trigger("afterLoad", t),
            this.hideLoading(t),
            !t.opts.smallBtn || t.$smallBtn && t.$smallBtn.length || (t.$smallBtn = i(this.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content)),
            t.opts.protect && t.$content && !t.hasError && (t.$content.on("contextmenu.fb", function(t) {
                return 2 == t.button && t.preventDefault(),
                !0
            }),
            "image" === t.type && i('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),
            this.adjustCaption(t),
            this.adjustLayout(t),
            t.pos === this.currPos && this.updateCursor(),
            this.revealContent(t))
        },
        adjustCaption: function(t) {
            var e = t || this.current
              , i = e.opts.caption
              , s = e.opts.preventCaptionOverlap
              , o = this.$refs.caption
              , t = !1;
            o.toggleClass("fancybox-caption--separate", s),
            s && i && i.length && (e.pos !== this.currPos ? ((o = o.clone().appendTo(o.parent())).children().eq(0).empty().html(i),
            t = o.outerHeight(!0),
            o.empty().remove()) : this.$caption && (t = this.$caption.outerHeight(!0)),
            e.$slide.css("padding-bottom", t || ""))
        },
        adjustLayout: function(t) {
            var e, i, s, o = t || this.current;
            o.isLoaded && !0 !== o.opts.disableLayoutFix && (o.$content.css("margin-bottom", ""),
            o.$content.outerHeight() > o.$slide.height() + .5 && (i = o.$slide[0].style["padding-bottom"],
            0 < parseFloat(s = o.$slide.css("padding-bottom")) && (t = o.$slide[0].scrollHeight,
            o.$slide.css("padding-bottom", 0),
            1 > Math.abs(t - o.$slide[0].scrollHeight) && (e = s),
            o.$slide.css("padding-bottom", i))),
            o.$content.css("margin-bottom", e))
        },
        revealContent: function(t) {
            var e, o, n, r, a = this, l = t.$slide, c = !1, h = !1, u = a.isMoved(t), p = t.isRevealed;
            return t.isRevealed = !0,
            e = t.opts[a.firstRun ? "animationEffect" : "transitionEffect"],
            n = t.opts[a.firstRun ? "animationDuration" : "transitionDuration"],
            n = parseInt(t.forcedDuration === s ? n : t.forcedDuration, 10),
            !u && t.pos === a.currPos && n || (e = !1),
            "zoom" === e && (t.pos === a.currPos && n && "image" === t.type && !t.hasError && (h = a.getThumbPos(t)) ? c = a.getFitPos(t) : e = "fade"),
            "zoom" === e ? (a.isAnimating = !0,
            c.scaleX = c.width / h.width,
            c.scaleY = c.height / h.height,
            "auto" == (r = t.opts.zoomOpacity) && (r = .1 < Math.abs(t.width / t.height - h.width / h.height)),
            r && (h.opacity = .1,
            c.opacity = 1),
            i.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), h),
            d(t.$content),
            void i.fancybox.animate(t.$content, c, n, function() {
                a.isAnimating = !1,
                a.complete()
            })) : (a.updateSlide(t),
            e ? (i.fancybox.stop(l),
            o = "fancybox-slide--" + (t.pos >= a.prevPos ? "next" : "previous") + " fancybox-animated fancybox-fx-" + e,
            l.addClass(o).removeClass("fancybox-slide--current"),
            t.$content.removeClass("fancybox-is-hidden"),
            d(l),
            "image" !== t.type && t.$content.hide().show(0),
            void i.fancybox.animate(l, "fancybox-slide--current", n, function() {
                l.removeClass(o).css({
                    transform: "",
                    opacity: ""
                }),
                t.pos === a.currPos && a.complete()
            }, !0)) : (t.$content.removeClass("fancybox-is-hidden"),
            p || !u || "image" !== t.type || t.hasError || t.$content.hide().fadeIn("fast"),
            void (t.pos === a.currPos && a.complete())))
        },
        getThumbPos: function(t) {
            var s, o, n, r, a = t.$thumb;
            return !!(a && (n = a[0]) && n.ownerDocument === e && (i(".fancybox-container").css("pointer-events", "none"),
            r = {
                x: n.getBoundingClientRect().left + n.offsetWidth / 2,
                y: n.getBoundingClientRect().top + n.offsetHeight / 2
            },
            n = e.elementFromPoint(r.x, r.y) === n,
            i(".fancybox-container").css("pointer-events", ""),
            n)) && (o = i.fancybox.getTranslate(a),
            t = parseFloat(a.css("border-top-width") || 0),
            r = parseFloat(a.css("border-right-width") || 0),
            n = parseFloat(a.css("border-bottom-width") || 0),
            a = parseFloat(a.css("border-left-width") || 0),
            s = {
                top: o.top + t,
                left: o.left + a,
                width: o.width - r - a,
                height: o.height - t - n,
                scaleX: 1,
                scaleY: 1
            },
            0 < o.width && 0 < o.height && s)
        },
        complete: function() {
            var t, e = this, s = e.current, o = {};
            !e.isMoved() && s.isLoaded && (s.isComplete || (s.isComplete = !0,
            s.$slide.siblings().trigger("onReset"),
            e.preload("inline"),
            d(s.$slide),
            s.$slide.addClass("fancybox-slide--complete"),
            i.each(e.slides, function(t, s) {
                s.pos >= e.currPos - 1 && s.pos <= e.currPos + 1 ? o[s.pos] = s : s && (i.fancybox.stop(s.$slide),
                s.$slide.off().remove())
            }),
            e.slides = o),
            e.isAnimating = !1,
            e.updateCursor(),
            e.trigger("afterShow"),
            s.opts.video.autoStart && s.$slide.find("video,audio").filter(":visible:first").trigger("play").one("ended", function() {
                Document.exitFullscreen ? Document.exitFullscreen() : this.webkitExitFullscreen && this.webkitExitFullscreen(),
                e.next()
            }),
            s.opts.autoFocus && "html" === s.contentType && ((t = s.$content.find("input[autofocus]:enabled:visible:first")).length ? t.trigger("focus") : e.focus(null, !0)),
            s.$slide.scrollTop(0).scrollLeft(0))
        },
        preload: function(t) {
            var e, i;
            this.group.length < 2 || (i = this.slides[this.currPos + 1],
            (e = this.slides[this.currPos - 1]) && e.type === t && this.loadSlide(e),
            i && i.type === t && this.loadSlide(i))
        },
        focus: function(t, s) {
            var o = 'a[href],area[href],input:not([disabled]):not([type="hidden"]):not([aria-hidden]),select:not([disabled]):not([aria-hidden]),textarea:not([disabled]):not([aria-hidden]),button:not([disabled]):not([aria-hidden]),iframe,object,embed,video,audio,[contenteditable],[tabindex]:not([tabindex^="-"])';
            this.isClosing || ((s = (s = !t && this.current && this.current.isComplete ? this.current.$slide.find("*:visible" + (s ? ":not(.fancybox-close-small)" : "")) : this.$refs.container.find("*:visible")).filter(o).filter(function() {
                return "hidden" !== i(this).css("visibility") && !i(this).hasClass("disabled")
            })).length ? (o = s.index(e.activeElement),
            t && t.shiftKey ? (o < 0 || 0 == o) && (t.preventDefault(),
            s.eq(s.length - 1).trigger("focus")) : (o < 0 || o == s.length - 1) && (t && t.preventDefault(),
            s.eq(0).trigger("focus"))) : this.$refs.container.trigger("focus"))
        },
        activate: function() {
            var t = this;
            i(".fancybox-container").each(function() {
                var e = i(this).data("FancyBox");
                e && e.id !== t.id && !e.isClosing && (e.trigger("onDeactivate"),
                e.removeEvents(),
                e.isVisible = !1)
            }),
            t.isVisible = !0,
            (t.current || t.isIdle) && (t.update(),
            t.updateControls()),
            t.trigger("onActivate"),
            t.addEvents()
        },
        close: function(t, e) {
            function s() {
                h.cleanUp(t)
            }
            var o, n, r, l, c, h = this, u = h.current;
            return !h.isClosing && ((h.isClosing = !0,
            !1 === h.trigger("beforeClose", t)) ? (h.isClosing = !1,
            a(function() {
                h.update()
            }),
            !1) : (h.removeEvents(),
            r = u.$content,
            o = u.opts.animationEffect,
            n = i.isNumeric(e) ? e : o ? u.opts.animationDuration : 0,
            u.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),
            !0 !== t ? i.fancybox.stop(u.$slide) : o = !1,
            u.$slide.siblings().trigger("onReset").remove(),
            n && h.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing").css("transition-duration", n + "ms"),
            h.hideLoading(u),
            h.hideControls(!0),
            h.updateCursor(),
            "zoom" !== o || r && n && "image" === u.type && !h.isMoved() && !u.hasError && (c = h.getThumbPos(u)) || (o = "fade"),
            "zoom" === o ? (i.fancybox.stop(r),
            e = {
                top: (l = i.fancybox.getTranslate(r)).top,
                left: l.left,
                scaleX: l.width / c.width,
                scaleY: l.height / c.height,
                width: c.width,
                height: c.height
            },
            "auto" == (l = u.opts.zoomOpacity) && (l = .1 < Math.abs(u.width / u.height - c.width / c.height)),
            l && (c.opacity = 0),
            i.fancybox.setTranslate(r, e),
            d(r),
            i.fancybox.animate(r, c, n, s)) : o && n ? i.fancybox.animate(u.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"), "fancybox-animated fancybox-fx-" + o, n, s) : !0 === t ? setTimeout(s, n) : s(),
            !0))
        },
        cleanUp: function(e) {
            var s, o = this, n = o.current.opts.$orig;
            o.current.$slide.trigger("onReset"),
            o.$refs.container.empty().remove(),
            o.trigger("afterClose", e),
            o.current.opts.backFocus && (n && n.length && n.is(":visible") || (n = o.$trigger),
            n && n.length && (s = t.scrollX,
            e = t.scrollY,
            n.trigger("focus"),
            i("html, body").scrollTop(e).scrollLeft(s))),
            o.current = null,
            (o = i.fancybox.getInstance()) ? o.activate() : (i("body").removeClass("fancybox-active compensate-for-scrollbar"),
            i("#fancybox-style-noscroll").remove())
        },
        trigger: function(t, e) {
            var s, o = Array.prototype.slice.call(arguments, 1), e = e && e.opts ? e : this.current;
            if (e ? o.unshift(e) : e = this,
            o.unshift(this),
            i.isFunction(e.opts[t]) && (s = e.opts[t].apply(e, o)),
            !1 === s)
                return s;
            ("afterClose" !== t && this.$refs ? this.$refs.container : n).trigger(t + ".fb", o)
        },
        updateControls: function() {
            var t = this
              , s = t.current
              , o = s.index
              , n = t.$refs.container
              , r = t.$refs.caption
              , a = s.opts.caption;
            s.$slide.trigger("refresh"),
            a && a.length ? (t.$caption = r).children().eq(0).html(a) : t.$caption = null,
            t.hasHiddenControls || t.isIdle || t.showControls(),
            n.find("[data-fancybox-count]").html(t.group.length),
            n.find("[data-fancybox-index]").html(o + 1),
            n.find("[data-fancybox-prev]").prop("disabled", !s.opts.loop && o <= 0),
            n.find("[data-fancybox-next]").prop("disabled", !s.opts.loop && o >= t.group.length - 1),
            "image" === s.type ? n.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href", s.opts.image.src || s.src).show() : s.opts.toolbar && n.find("[data-fancybox-download],[data-fancybox-zoom]").hide(),
            i(e.activeElement).is(":hidden,[disabled]") && t.$refs.container.trigger("focus")
        },
        hideControls: function(t) {
            var e = ["infobar", "toolbar", "nav"];
            !t && this.current.opts.preventCaptionOverlap || e.push("caption"),
            this.$refs.container.removeClass(e.map(function(t) {
                return "fancybox-show-" + t
            }).join(" ")),
            this.hasHiddenControls = !0
        },
        showControls: function() {
            var t = this
              , e = (t.current || t).opts
              , i = t.$refs.container;
            t.hasHiddenControls = !1,
            t.idleSecondsCounter = 0,
            i.toggleClass("fancybox-show-toolbar", !(!e.toolbar || !e.buttons)).toggleClass("fancybox-show-infobar", !!(e.infobar && 1 < t.group.length)).toggleClass("fancybox-show-caption", !!t.$caption).toggleClass("fancybox-show-nav", !!(e.arrows && 1 < t.group.length)).toggleClass("fancybox-is-modal", !!e.modal)
        },
        toggleControls: function() {
            this.hasHiddenControls ? this.showControls() : this.hideControls()
        }
    }),
    i.fancybox = {
        version: "3.5.7",
        defaults: p,
        getInstance: function(t) {
            var e = i('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox")
              , s = Array.prototype.slice.call(arguments, 1);
            return e instanceof u && ("string" === i.type(t) ? e[t].apply(e, s) : "function" === i.type(t) && t.apply(e, s),
            e)
        },
        open: function(t, e, i) {
            return new u(t,e,i)
        },
        close: function(t) {
            var e = this.getInstance();
            e && (e.close(),
            !0 === t && this.close(t))
        },
        destroy: function() {
            this.close(!0),
            n.add("body").off("click.fb-start", "**")
        },
        isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
        use3d: (p = e.createElement("div"),
        t.getComputedStyle && t.getComputedStyle(p) && t.getComputedStyle(p).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11)),
        getTranslate: function(t) {
            var e;
            return !(!t || !t.length) && {
                top: (e = t[0].getBoundingClientRect()).top || 0,
                left: e.left || 0,
                width: e.width,
                height: e.height,
                opacity: parseFloat(t.css("opacity"))
            }
        },
        setTranslate: function(t, e) {
            var i = ""
              , o = {};
            if (t && e)
                return e.left === s && e.top === s || (i = (e.left === s ? t.position() : e).left + "px, " + (e.top === s ? t.position() : e).top + "px",
                i = this.use3d ? "translate3d(" + i + ", 0px)" : "translate(" + i + ")"),
                e.scaleX !== s && e.scaleY !== s ? i += " scale(" + e.scaleX + ", " + e.scaleY + ")" : e.scaleX !== s && (i += " scaleX(" + e.scaleX + ")"),
                i.length && (o.transform = i),
                e.opacity !== s && (o.opacity = e.opacity),
                e.width !== s && (o.width = e.width),
                e.height !== s && (o.height = e.height),
                t.css(o)
        },
        animate: function(t, e, o, n, r) {
            var a, l = this;
            i.isFunction(o) && (n = o,
            o = null),
            l.stop(t),
            a = l.getTranslate(t),
            t.on(c, function(c) {
                c && c.originalEvent && (!t.is(c.originalEvent.target) || "z-index" == c.originalEvent.propertyName) || (l.stop(t),
                i.isNumeric(o) && t.css("transition-duration", ""),
                i.isPlainObject(e) ? e.scaleX !== s && e.scaleY !== s && l.setTranslate(t, {
                    top: e.top,
                    left: e.left,
                    width: a.width * e.scaleX,
                    height: a.height * e.scaleY,
                    scaleX: 1,
                    scaleY: 1
                }) : !0 !== r && t.removeClass(e),
                i.isFunction(n) && n(c))
            }),
            i.isNumeric(o) && t.css("transition-duration", o + "ms"),
            i.isPlainObject(e) ? (e.scaleX !== s && e.scaleY !== s && (delete e.width,
            delete e.height,
            t.parent().hasClass("fancybox-slide--image") && t.parent().addClass("fancybox-is-scaling")),
            i.fancybox.setTranslate(t, e)) : t.addClass(e),
            t.data("timer", setTimeout(function() {
                t.trigger(c)
            }, o + 33))
        },
        stop: function(t, e) {
            t && t.length && (clearTimeout(t.data("timer")),
            e && t.trigger(c),
            t.off(c).css("transition-duration", ""),
            t.parent().removeClass("fancybox-is-scaling"))
        }
    },
    i.fn.fancybox = function(t) {
        var e;
        return (e = (t = t || {}).selector || !1) ? i("body").off("click.fb-start", e).on("click.fb-start", e, {
            options: t
        }, b) : this.off("click.fb-start").on("click.fb-start", {
            items: this,
            options: t
        }, b),
        this
    }
    ,
    n.on("click.fb-start", "[data-fancybox]", b),
    n.on("click.fb-start", "[data-fancybox-trigger]", function(t) {
        i('[data-fancybox="' + i(this).attr("data-fancybox-trigger") + '"]').eq(i(this).attr("data-fancybox-index") || 0).trigger("click.fb-start", {
            $trigger: i(this)
        })
    }),
    f = ".fancybox-button",
    g = "fancybox-focus",
    m = null,
    n.on("mousedown mouseup focus blur", f, function(t) {
        switch (t.type) {
        case "mousedown":
            m = i(this);
            break;
        case "mouseup":
            m = null;
            break;
        case "focusin":
            i(f).removeClass(g),
            i(this).is(m) || i(this).is("[disabled]") || i(this).addClass(g);
            break;
        case "focusout":
            i(f).removeClass(g)
        }
    })))
}(window, document, jQuery),
function(t) {
    "use strict";
    function e(e, i, s) {
        if (e)
            return s = s || "",
            "object" === t.type(s) && (s = t.param(s, !0)),
            t.each(i, function(t, i) {
                e = e.replace("$" + t, i || "")
            }),
            s.length && (e += (0 < e.indexOf("?") ? "&" : "?") + s),
            e
    }
    var i = {
        youtube: {
            matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
            params: {
                autoplay: 1,
                autohide: 1,
                fs: 1,
                rel: 0,
                hd: 1,
                wmode: "transparent",
                enablejsapi: 1,
                html5: 1
            },
            paramPlace: 8,
            type: "iframe",
            url: "https://www.youtube-nocookie.com/embed/$4",
            thumb: "https://img.youtube.com/vi/$4/hqdefault.jpg"
        },
        vimeo: {
            matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
            params: {
                autoplay: 1,
                hd: 1,
                show_title: 1,
                show_byline: 1,
                show_portrait: 0,
                fullscreen: 1
            },
            paramPlace: 3,
            type: "iframe",
            url: "//player.vimeo.com/video/$2"
        },
        instagram: {
            matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
            type: "image",
            url: "//$1/p/$2/media/?size=l"
        },
        gmap_place: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
            type: "iframe",
            url: function(t) {
                return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12] + "").replace(/\?/, "&") + "&output=" + (t[12] && 0 < t[12].indexOf("layer=c") ? "svembed" : "embed")
            }
        },
        gmap_search: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
            type: "iframe",
            url: function(t) {
                return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed"
            }
        }
    };
    t(document).on("objectNeedsType.fb", function(s, o, n) {
        var r, a, l, c, d, h, u = n.src || "", p = !1, f = t.extend(!0, {}, i, n.opts.media);
        t.each(f, function(i, s) {
            if (a = u.match(s.matcher)) {
                if (p = s.type,
                h = i,
                d = {},
                s.paramPlace && a[s.paramPlace]) {
                    "?" == (c = a[s.paramPlace])[0] && (c = c.substring(1)),
                    c = c.split("&");
                    for (var o = 0; o < c.length; ++o) {
                        var f = c[o].split("=", 2);
                        2 == f.length && (d[f[0]] = decodeURIComponent(f[1].replace(/\+/g, " ")))
                    }
                }
                return l = t.extend(!0, {}, s.params, n.opts[i], d),
                u = "function" === t.type(s.url) ? s.url.call(this, a, l, n) : e(s.url, a, l),
                r = "function" === t.type(s.thumb) ? s.thumb.call(this, a, l, n) : e(s.thumb, a),
                "youtube" === i ? u = u.replace(/&t=((\d+)m)?(\d+)s/, function(t, e, i, s) {
                    return "&start=" + ((i ? 60 * parseInt(i, 10) : 0) + parseInt(s, 10))
                }) : "vimeo" === i && (u = u.replace("&%23", "#")),
                !1
            }
        }),
        p ? (n.opts.thumb || n.opts.$thumb && n.opts.$thumb.length || (n.opts.thumb = r),
        "iframe" === p && (n.opts = t.extend(!0, n.opts, {
            iframe: {
                preload: !1,
                attr: {
                    scrolling: "no"
                }
            }
        })),
        t.extend(n, {
            type: p,
            src: u,
            origSrc: n.src,
            contentSource: h,
            contentType: "image" === p ? "image" : "gmap_place" == h || "gmap_search" == h ? "map" : "video"
        })) : u && (n.type = n.opts.defaultType)
    });
    var s = {
        youtube: {
            src: "https://www.youtube.com/iframe_api",
            class: "YT",
            loading: !1,
            loaded: !1
        },
        vimeo: {
            src: "https://player.vimeo.com/api/player.js",
            class: "Vimeo",
            loading: !1,
            loaded: !1
        },
        load: function(t) {
            var e, i = this;
            this[t].loaded ? setTimeout(function() {
                i.done(t)
            }) : this[t].loading || (this[t].loading = !0,
            (e = document.createElement("script")).type = "text/javascript",
            e.src = this[t].src,
            "youtube" === t ? window.onYouTubeIframeAPIReady = function() {
                i[t].loaded = !0,
                i.done(t)
            }
            : e.onload = function() {
                i[t].loaded = !0,
                i.done(t)
            }
            ,
            document.body.appendChild(e))
        },
        done: function(e) {
            var i, s;
            "youtube" === e && delete window.onYouTubeIframeAPIReady,
            (i = t.fancybox.getInstance()) && (s = i.current.$content.find("iframe"),
            "youtube" === e && void 0 !== YT && YT ? new YT.Player(s.attr("id"),{
                events: {
                    onStateChange: function(t) {
                        0 == t.data && i.next()
                    }
                }
            }) : "vimeo" === e && void 0 !== Vimeo && Vimeo && new Vimeo.Player(s).on("ended", function() {
                i.next()
            }))
        }
    };
    t(document).on({
        "afterShow.fb": function(t, e, i) {
            1 < e.group.length && ("youtube" === i.contentSource || "vimeo" === i.contentSource) && s.load(i.contentSource)
        }
    })
}(jQuery),
function(t, e, i) {
    "use strict";
    function s(e) {
        var i, s = [];
        for (i in e = (e = e.originalEvent || e || t.e).touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e])
            e[i].pageX ? s.push({
                x: e[i].pageX,
                y: e[i].pageY
            }) : e[i].clientX && s.push({
                x: e[i].clientX,
                y: e[i].clientY
            });
        return s
    }
    function o(t, e, i) {
        return e && t ? "x" === i ? t.x - e.x : "y" === i ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)) : 0
    }
    function n(t) {
        if (t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe') || i.isFunction(t.get(0).onclick) || t.data("selectable"))
            return 1;
        for (var e = 0, s = t[0].attributes, o = s.length; e < o; e++)
            if ("data-fancybox-" === s[e].nodeName.substr(0, 14))
                return 1
    }
    function r(e) {
        for (var i, s, o, n = !1; i = e.get(0),
        s = o = s = void 0,
        s = t.getComputedStyle(i)["overflow-y"],
        o = t.getComputedStyle(i)["overflow-x"],
        s = ("scroll" === s || "auto" === s) && i.scrollHeight > i.clientHeight,
        i = ("scroll" === o || "auto" === o) && i.scrollWidth > i.clientWidth,
        !(n = s || i) && (e = e.parent()).length && !e.hasClass("fancybox-stage") && !e.is("body"); )
            ;
        return n
    }
    function a(t) {
        var e = this;
        e.instance = t,
        e.$bg = t.$refs.bg,
        e.$stage = t.$refs.stage,
        e.$container = t.$refs.container,
        e.destroy(),
        e.$container.on("touchstart.fb.touch mousedown.fb.touch", i.proxy(e, "ontouchstart"))
    }
    var l = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function(e) {
        return t.setTimeout(e, 1e3 / 60)
    }
      , c = t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function(e) {
        t.clearTimeout(e)
    }
    ;
    a.prototype.destroy = function() {
        var t = this;
        t.$container.off(".fb.touch"),
        i(e).off(".fb.touch"),
        t.requestId && (c(t.requestId),
        t.requestId = null),
        t.tapped && (clearTimeout(t.tapped),
        t.tapped = null)
    }
    ,
    a.prototype.ontouchstart = function(a) {
        var l = this
          , c = i(a.target)
          , d = l.instance
          , h = d.current
          , u = h.$slide
          , p = h.$content
          , f = "touchstart" == a.type;
        if (f && l.$container.off("mousedown.fb.touch"),
        (!a.originalEvent || 2 != a.originalEvent.button) && u.length && c.length && !n(c) && !n(c.parent()) && (c.is("img") || !(a.originalEvent.clientX > c[0].clientWidth + c.offset().left))) {
            if (!h || d.isAnimating || h.$slide.hasClass("fancybox-animated"))
                return a.stopPropagation(),
                void a.preventDefault();
            l.realPoints = l.startPoints = s(a),
            l.startPoints.length && (h.touch && a.stopPropagation(),
            l.startEvent = a,
            l.canTap = !0,
            l.$target = c,
            l.$content = p,
            l.opts = h.opts.touch,
            l.isPanning = !1,
            l.isSwiping = !1,
            l.isZooming = !1,
            l.isScrolling = !1,
            l.canPan = d.canPan(),
            l.startTime = (new Date).getTime(),
            l.distanceX = l.distanceY = l.distance = 0,
            l.canvasWidth = Math.round(u[0].clientWidth),
            l.canvasHeight = Math.round(u[0].clientHeight),
            l.contentLastPos = null,
            l.contentStartPos = i.fancybox.getTranslate(l.$content) || {
                top: 0,
                left: 0
            },
            l.sliderStartPos = i.fancybox.getTranslate(u),
            l.stagePos = i.fancybox.getTranslate(d.$refs.stage),
            l.sliderStartPos.top -= l.stagePos.top,
            l.sliderStartPos.left -= l.stagePos.left,
            l.contentStartPos.top -= l.stagePos.top,
            l.contentStartPos.left -= l.stagePos.left,
            i(e).off(".fb.touch").on(f ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", i.proxy(l, "ontouchend")).on(f ? "touchmove.fb.touch" : "mousemove.fb.touch", i.proxy(l, "ontouchmove")),
            i.fancybox.isMobile && e.addEventListener("scroll", l.onscroll, !0),
            ((l.opts || l.canPan) && (c.is(l.$stage) || l.$stage.find(c).length) || (c.is(".fancybox-image") && a.preventDefault(),
            i.fancybox.isMobile && c.parents(".fancybox-caption").length)) && (l.isScrollable = r(c) || r(c.parent()),
            i.fancybox.isMobile && l.isScrollable || a.preventDefault(),
            (1 === l.startPoints.length || h.hasError) && (l.canPan ? (i.fancybox.stop(l.$content),
            l.isPanning = !0) : l.isSwiping = !0,
            l.$container.addClass("fancybox-is-grabbing")),
            2 === l.startPoints.length && "image" === h.type && (h.isLoaded || h.$ghost) && (l.canTap = !1,
            l.isSwiping = !1,
            l.isPanning = !1,
            l.isZooming = !0,
            i.fancybox.stop(l.$content),
            l.centerPointStartX = .5 * (l.startPoints[0].x + l.startPoints[1].x) - i(t).scrollLeft(),
            l.centerPointStartY = .5 * (l.startPoints[0].y + l.startPoints[1].y) - i(t).scrollTop(),
            l.percentageOfImageAtPinchPointX = (l.centerPointStartX - l.contentStartPos.left) / l.contentStartPos.width,
            l.percentageOfImageAtPinchPointY = (l.centerPointStartY - l.contentStartPos.top) / l.contentStartPos.height,
            l.startDistanceBetweenFingers = o(l.startPoints[0], l.startPoints[1]))))
        }
    }
    ,
    a.prototype.onscroll = function(t) {
        this.isScrolling = !0,
        e.removeEventListener("scroll", this.onscroll, !0)
    }
    ,
    a.prototype.ontouchmove = function(t) {
        var e = this;
        void 0 === t.originalEvent.buttons || 0 !== t.originalEvent.buttons ? e.isScrolling ? e.canTap = !1 : (e.newPoints = s(t),
        (e.opts || e.canPan) && e.newPoints.length && e.newPoints.length && (e.isSwiping && !0 === e.isSwiping || t.preventDefault(),
        e.distanceX = o(e.newPoints[0], e.startPoints[0], "x"),
        e.distanceY = o(e.newPoints[0], e.startPoints[0], "y"),
        e.distance = o(e.newPoints[0], e.startPoints[0]),
        0 < e.distance && (e.isSwiping ? e.onSwipe(t) : e.isPanning ? e.onPan() : e.isZooming && e.onZoom()))) : e.ontouchend(t)
    }
    ,
    a.prototype.onSwipe = function(e) {
        var s = this
          , o = s.instance
          , n = s.isSwiping
          , r = s.sliderStartPos.left || 0;
        if (!0 !== n)
            "x" == n && (0 < s.distanceX && (s.instance.group.length < 2 || 0 === s.instance.current.index && !s.instance.current.opts.loop) ? r += Math.pow(s.distanceX, .8) : s.distanceX < 0 && (s.instance.group.length < 2 || s.instance.current.index === s.instance.group.length - 1 && !s.instance.current.opts.loop) ? r -= Math.pow(-s.distanceX, .8) : r += s.distanceX),
            s.sliderLastPos = {
                top: "x" == n ? 0 : s.sliderStartPos.top + s.distanceY,
                left: r
            },
            s.requestId && (c(s.requestId),
            s.requestId = null),
            s.requestId = l(function() {
                s.sliderLastPos && (i.each(s.instance.slides, function(t, e) {
                    var o = e.pos - s.instance.currPos;
                    i.fancybox.setTranslate(e.$slide, {
                        top: s.sliderLastPos.top,
                        left: s.sliderLastPos.left + o * s.canvasWidth + o * e.opts.gutter
                    })
                }),
                s.$container.addClass("fancybox-is-sliding"))
            });
        else if (10 < Math.abs(s.distance)) {
            if (s.canTap = !1,
            o.group.length < 2 && s.opts.vertical ? s.isSwiping = "y" : o.isDragging || !1 === s.opts.vertical || "auto" === s.opts.vertical && 800 < i(t).width() ? s.isSwiping = "x" : (r = Math.abs(180 * Math.atan2(s.distanceY, s.distanceX) / Math.PI),
            s.isSwiping = 45 < r && r < 135 ? "y" : "x"),
            "y" === s.isSwiping && i.fancybox.isMobile && s.isScrollable)
                return void (s.isScrolling = !0);
            o.isDragging = s.isSwiping,
            s.startPoints = s.newPoints,
            i.each(o.slides, function(t, e) {
                var n, r;
                i.fancybox.stop(e.$slide),
                n = i.fancybox.getTranslate(e.$slide),
                r = i.fancybox.getTranslate(o.$refs.stage),
                e.$slide.css({
                    transform: "",
                    opacity: "",
                    "transition-duration": ""
                }).removeClass("fancybox-animated").removeClass(function(t, e) {
                    return (e.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ")
                }),
                e.pos === o.current.pos && (s.sliderStartPos.top = n.top - r.top,
                s.sliderStartPos.left = n.left - r.left),
                i.fancybox.setTranslate(e.$slide, {
                    top: n.top - r.top,
                    left: n.left - r.left
                })
            }),
            o.SlideShow && o.SlideShow.isActive && o.SlideShow.stop()
        }
    }
    ,
    a.prototype.onPan = function() {
        var t = this;
        o(t.newPoints[0], t.realPoints[0]) < (i.fancybox.isMobile ? 10 : 5) ? t.startPoints = t.newPoints : (t.canTap = !1,
        t.contentLastPos = t.limitMovement(),
        t.requestId && c(t.requestId),
        t.requestId = l(function() {
            i.fancybox.setTranslate(t.$content, t.contentLastPos)
        }))
    }
    ,
    a.prototype.limitMovement = function() {
        var t = this
          , e = t.canvasWidth
          , i = t.canvasHeight
          , s = t.distanceX
          , o = t.distanceY
          , n = t.contentStartPos
          , r = n.left
          , a = n.top
          , l = n.width
          , c = n.height
          , d = e < l ? r + s : r
          , h = a + o
          , t = Math.max(0, .5 * e - .5 * l)
          , n = Math.max(0, .5 * i - .5 * c)
          , l = Math.min(e - l, .5 * e - .5 * l)
          , c = Math.min(i - c, .5 * i - .5 * c);
        return 0 < s && t < d && (d = t - 1 + Math.pow(-t + r + s, .8) || 0),
        s < 0 && d < l && (d = l + 1 - Math.pow(l - r - s, .8) || 0),
        0 < o && n < h && (h = n - 1 + Math.pow(-n + a + o, .8) || 0),
        o < 0 && h < c && (h = c + 1 - Math.pow(c - a - o, .8) || 0),
        {
            top: h,
            left: d
        }
    }
    ,
    a.prototype.limitPosition = function(t, e, i, s) {
        var o = this.canvasWidth
          , n = this.canvasHeight;
        return t = o < i ? (t = 0 < t ? 0 : t) < o - i ? o - i : t : Math.max(0, o / 2 - i / 2),
        {
            top: e = n < s ? (e = 0 < e ? 0 : e) < n - s ? n - s : e : Math.max(0, n / 2 - s / 2),
            left: t
        }
    }
    ,
    a.prototype.onZoom = function() {
        var e = this
          , s = e.contentStartPos
          , n = s.width
          , r = s.height
          , a = s.left
          , d = s.top
          , h = o(e.newPoints[0], e.newPoints[1]) / e.startDistanceBetweenFingers
          , u = Math.floor(n * h)
          , p = Math.floor(r * h)
          , f = (n - u) * e.percentageOfImageAtPinchPointX
          , s = (r - p) * e.percentageOfImageAtPinchPointY
          , n = (e.newPoints[0].x + e.newPoints[1].x) / 2 - i(t).scrollLeft()
          , r = (e.newPoints[0].y + e.newPoints[1].y) / 2 - i(t).scrollTop()
          , n = n - e.centerPointStartX
          , h = {
            top: d + (s + (r - e.centerPointStartY)),
            left: a + (f + n),
            scaleX: h,
            scaleY: h
        };
        e.canTap = !1,
        e.newWidth = u,
        e.newHeight = p,
        e.contentLastPos = h,
        e.requestId && c(e.requestId),
        e.requestId = l(function() {
            i.fancybox.setTranslate(e.$content, e.contentLastPos)
        })
    }
    ,
    a.prototype.ontouchend = function(t) {
        var o = this
          , n = o.isSwiping
          , r = o.isPanning
          , a = o.isZooming
          , l = o.isScrolling;
        if (o.endPoints = s(t),
        o.dMs = Math.max((new Date).getTime() - o.startTime, 1),
        o.$container.removeClass("fancybox-is-grabbing"),
        i(e).off(".fb.touch"),
        e.removeEventListener("scroll", o.onscroll, !0),
        o.requestId && (c(o.requestId),
        o.requestId = null),
        o.isSwiping = !1,
        o.isPanning = !1,
        o.isZooming = !1,
        o.isScrolling = !1,
        o.instance.isDragging = !1,
        o.canTap)
            return o.onTap(t);
        o.speed = 100,
        o.velocityX = o.distanceX / o.dMs * .5,
        o.velocityY = o.distanceY / o.dMs * .5,
        r ? o.endPanning() : a ? o.endZooming() : o.endSwiping(n, l)
    }
    ,
    a.prototype.endSwiping = function(t, e) {
        var s = this
          , o = !1
          , n = s.instance.group.length
          , r = Math.abs(s.distanceX)
          , r = "x" == t && 1 < n && (130 < s.dMs && 10 < r || 50 < r);
        s.sliderLastPos = null,
        "y" == t && !e && 50 < Math.abs(s.distanceY) ? (i.fancybox.animate(s.instance.current.$slide, {
            top: s.sliderStartPos.top + s.distanceY + 150 * s.velocityY,
            opacity: 0
        }, 200),
        o = s.instance.close(!0, 250)) : r && 0 < s.distanceX ? o = s.instance.previous(300) : r && s.distanceX < 0 && (o = s.instance.next(300)),
        !1 !== o || "x" != t && "y" != t || s.instance.centerSlide(200),
        s.$container.removeClass("fancybox-is-sliding")
    }
    ,
    a.prototype.endPanning = function() {
        var t, e;
        this.contentLastPos && (e = !1 === this.opts.momentum || 350 < this.dMs ? (t = this.contentLastPos.left,
        this.contentLastPos.top) : (t = this.contentLastPos.left + 500 * this.velocityX,
        this.contentLastPos.top + 500 * this.velocityY),
        (e = this.limitPosition(t, e, this.contentStartPos.width, this.contentStartPos.height)).width = this.contentStartPos.width,
        e.height = this.contentStartPos.height,
        i.fancybox.animate(this.$content, e, 366))
    }
    ,
    a.prototype.endZooming = function() {
        var t, e, s, o = this.instance.current, n = this.newWidth, r = this.newHeight;
        this.contentLastPos && (t = this.contentLastPos.left,
        s = {
            top: e = this.contentLastPos.top,
            left: t,
            width: n,
            height: r,
            scaleX: 1,
            scaleY: 1
        },
        i.fancybox.setTranslate(this.$content, s),
        n < this.canvasWidth && r < this.canvasHeight ? this.instance.scaleToFit(150) : n > o.width || r > o.height ? this.instance.scaleToActual(this.centerPointStartX, this.centerPointStartY, 150) : (r = this.limitPosition(t, e, n, r),
        i.fancybox.animate(this.$content, r, 150)))
    }
    ,
    a.prototype.onTap = function(e) {
        function o(t) {
            if (t = c.opts[t],
            i.isFunction(t) && (t = t.apply(l, [c, e])),
            t)
                switch (t) {
                case "close":
                    l.close(r.startEvent);
                    break;
                case "toggleControls":
                    l.toggleControls();
                    break;
                case "next":
                    l.next();
                    break;
                case "nextOrClose":
                    1 < l.group.length ? l.next() : l.close(r.startEvent);
                    break;
                case "zoom":
                    "image" == c.type && (c.isLoaded || c.$ghost) && (l.canPan() ? l.scaleToFit() : l.isScaledDown() ? l.scaleToActual(h, u) : l.group.length < 2 && l.close(r.startEvent))
                }
        }
        var n, r = this, a = i(e.target), l = r.instance, c = l.current, d = e && s(e) || r.startPoints, h = d[0] ? d[0].x - i(t).scrollLeft() - r.stagePos.left : 0, u = d[0] ? d[0].y - i(t).scrollTop() - r.stagePos.top : 0;
        if ((!e.originalEvent || 2 != e.originalEvent.button) && (a.is("img") || !(h > a[0].clientWidth + a.offset().left))) {
            if (a.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container"))
                n = "Outside";
            else if (a.is(".fancybox-slide"))
                n = "Slide";
            else {
                if (!l.current.$content || !l.current.$content.find(a).addBack().filter(a).length)
                    return;
                n = "Content"
            }
            if (r.tapped) {
                if (clearTimeout(r.tapped),
                r.tapped = null,
                50 < Math.abs(h - r.tapX) || 50 < Math.abs(u - r.tapY))
                    return this;
                o("dblclick" + n)
            } else
                r.tapX = h,
                r.tapY = u,
                c.opts["dblclick" + n] && c.opts["dblclick" + n] !== c.opts["click" + n] ? r.tapped = setTimeout(function() {
                    r.tapped = null,
                    l.isAnimating || o("click" + n)
                }, 500) : o("click" + n);
            return this
        }
    }
    ,
    i(e).on("onActivate.fb", function(t, e) {
        e && !e.Guestures && (e.Guestures = new a(e))
    }).on("beforeClose.fb", function(t, e) {
        e && e.Guestures && e.Guestures.destroy()
    })
}(window, document, jQuery),
function(t, e) {
    "use strict";
    function i(t) {
        this.instance = t,
        this.init()
    }
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {
            slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg></button>'
        },
        slideShow: {
            autoStart: !1,
            speed: 3e3,
            progress: !0
        }
    }),
    e.extend(i.prototype, {
        timer: null,
        isActive: !1,
        $button: null,
        init: function() {
            var t = this
              , i = t.instance
              , s = i.group[i.currIndex].opts.slideShow;
            t.$button = i.$refs.toolbar.find("[data-fancybox-play]").on("click", function() {
                t.toggle()
            }),
            i.group.length < 2 || !s ? t.$button.hide() : s.progress && (t.$progress = e('<div class="fancybox-progress"></div>').appendTo(i.$refs.inner))
        },
        set: function(t) {
            var i = this
              , s = i.instance
              , o = s.current;
            o && (!0 === t || o.opts.loop || s.currIndex < s.group.length - 1) ? i.isActive && "video" !== o.contentType && (i.$progress && e.fancybox.animate(i.$progress.show(), {
                scaleX: 1
            }, o.opts.slideShow.speed),
            i.timer = setTimeout(function() {
                s.current.opts.loop || s.current.index != s.group.length - 1 ? s.next() : s.jumpTo(0)
            }, o.opts.slideShow.speed)) : (i.stop(),
            s.idleSecondsCounter = 0,
            s.showControls())
        },
        clear: function() {
            clearTimeout(this.timer),
            this.timer = null,
            this.$progress && this.$progress.removeAttr("style").hide()
        },
        start: function() {
            var t = this
              , e = t.instance.current;
            e && (t.$button.attr("title", (e.opts.i18n[e.opts.lang] || e.opts.i18n.en).PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"),
            t.isActive = !0,
            e.isComplete && t.set(!0),
            t.instance.trigger("onSlideShowChange", !0))
        },
        stop: function() {
            var t = this
              , e = t.instance.current;
            t.clear(),
            t.$button.attr("title", (e.opts.i18n[e.opts.lang] || e.opts.i18n.en).PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"),
            t.isActive = !1,
            t.instance.trigger("onSlideShowChange", !1),
            t.$progress && t.$progress.removeAttr("style").hide()
        },
        toggle: function() {
            this.isActive ? this.stop() : this.start()
        }
    }),
    e(t).on({
        "onInit.fb": function(t, e) {
            e && !e.SlideShow && (e.SlideShow = new i(e))
        },
        "beforeShow.fb": function(t, e, i, s) {
            e = e && e.SlideShow,
            s ? e && i.opts.slideShow.autoStart && e.start() : e && e.isActive && e.clear()
        },
        "afterShow.fb": function(t, e, i) {
            (e = e && e.SlideShow) && e.isActive && e.set()
        },
        "afterKeydown.fb": function(i, s, o, n, r) {
            !(!(s = s && s.SlideShow) || !o.opts.slideShow || 80 !== r && 32 !== r || e(t.activeElement).is("button,a,input")) && (n.preventDefault(),
            s.toggle())
        },
        "beforeClose.fb onDeactivate.fb": function(t, e) {
            (e = e && e.SlideShow) && e.stop()
        }
    }),
    e(t).on("visibilitychange", function() {
        var i = e.fancybox.getInstance()
          , i = i && i.SlideShow;
        i && i.isActive && (t.hidden ? i.clear() : i.set())
    })
}(document, jQuery),
function(t, e) {
    "use strict";
    var i, s = function() {
        for (var e = [["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"], ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"], ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"], ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"], ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]], i = {}, s = 0; s < e.length; s++) {
            var o = e[s];
            if (o && o[1]in t) {
                for (var n = 0; n < o.length; n++)
                    i[e[0][n]] = o[n];
                return i
            }
        }
        return !1
    }();
    s && (i = {
        request: function(e) {
            (e = e || t.documentElement)[s.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)
        },
        exit: function() {
            t[s.exitFullscreen]()
        },
        toggle: function(e) {
            e = e || t.documentElement,
            this.isFullscreen() ? this.exit() : this.request(e)
        },
        isFullscreen: function() {
            return Boolean(t[s.fullscreenElement])
        },
        enabled: function() {
            return Boolean(t[s.fullscreenEnabled])
        }
    },
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {
            fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg></button>'
        },
        fullScreen: {
            autoStart: !1
        }
    }),
    e(t).on(s.fullscreenchange, function() {
        var t = i.isFullscreen()
          , s = e.fancybox.getInstance();
        s && (s.current && "image" === s.current.type && s.isAnimating && (s.isAnimating = !1,
        s.update(!0, !0, 0),
        s.isComplete || s.complete()),
        s.trigger("onFullscreenChange", t),
        s.$refs.container.toggleClass("fancybox-is-fullscreen", t),
        s.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter", !t).toggleClass("fancybox-button--fsexit", t))
    })),
    e(t).on({
        "onInit.fb": function(t, e) {
            s ? e && e.group[e.currIndex].opts.fullScreen ? (e.$refs.container.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function(t) {
                t.stopPropagation(),
                t.preventDefault(),
                i.toggle()
            }),
            e.opts.fullScreen && !0 === e.opts.fullScreen.autoStart && i.request(),
            e.FullScreen = i) : e && e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide() : e.$refs.toolbar.find("[data-fancybox-fullscreen]").remove()
        },
        "afterKeydown.fb": function(t, e, i, s, o) {
            e && e.FullScreen && 70 === o && (s.preventDefault(),
            e.FullScreen.toggle())
        },
        "beforeClose.fb": function(t, e) {
            e && e.FullScreen && e.$refs.container.hasClass("fancybox-is-fullscreen") && i.exit()
        }
    })
}(document, jQuery),
function(t, e) {
    "use strict";
    var i = "fancybox-thumbs"
      , s = i + "-active";
    function o(t) {
        this.init(t)
    }
    e.fancybox.defaults = e.extend(!0, {
        btnTpl: {
            thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg></button>'
        },
        thumbs: {
            autoStart: !1,
            hideOnClose: !0,
            parentEl: ".fancybox-container",
            axis: "y"
        }
    }, e.fancybox.defaults),
    e.extend(o.prototype, {
        $button: null,
        $grid: null,
        $list: null,
        isVisible: !1,
        isActive: !1,
        init: function(t) {
            var e = this
              , i = t.group
              , s = 0;
            e.instance = t,
            e.opts = i[t.currIndex].opts.thumbs,
            (t.Thumbs = e).$button = t.$refs.toolbar.find("[data-fancybox-thumbs]");
            for (var o = 0, n = i.length; o < n && (i[o].thumb && s++,
            !(1 < s)); o++)
                ;
            1 < s && e.opts ? (e.$button.removeAttr("style").on("click", function() {
                e.toggle()
            }),
            e.isActive = !0) : e.$button.hide()
        },
        create: function() {
            var t, s = this, o = s.instance, n = s.opts.parentEl, r = [];
            s.$grid || (s.$grid = e('<div class="' + i + " " + i + "-" + s.opts.axis + '"></div>').appendTo(o.$refs.container.find(n).addBack().filter(n)),
            s.$grid.on("click", "a", function() {
                o.jumpTo(e(this).attr("data-index"))
            })),
            s.$list || (s.$list = e('<div class="' + i + '__list">').appendTo(s.$grid)),
            e.each(o.group, function(e, i) {
                (t = i.thumb) || "image" !== i.type || (t = i.src),
                r.push('<a href="<?php echo BASE_URL; ?>javascript:;" tabindex="0" data-index="' + e + '"' + (t && t.length ? ' style="background-image:url(' + t + ')"' : 'class="fancybox-thumbs-missing"') + "></a>")
            }),
            s.$list[0].innerHTML = r.join(""),
            "x" === s.opts.axis && s.$list.width(parseInt(s.$grid.css("padding-right"), 10) + o.group.length * s.$list.children().eq(0).outerWidth(!0))
        },
        focus: function(t) {
            var e, i, o = this.$list, n = this.$grid;
            this.instance.current && (i = (e = o.children().removeClass(s).filter('[data-index="' + this.instance.current.index + '"]').addClass(s)).position(),
            "y" === this.opts.axis && (i.top < 0 || i.top > o.height() - e.outerHeight()) ? o.stop().animate({
                scrollTop: o.scrollTop() + i.top
            }, t) : "x" === this.opts.axis && (i.left < n.scrollLeft() || i.left > n.scrollLeft() + (n.width() - e.outerWidth())) && o.parent().stop().animate({
                scrollLeft: i.left
            }, t))
        },
        update: function() {
            this.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible),
            this.isVisible ? (this.$grid || this.create(),
            this.instance.trigger("onThumbsShow"),
            this.focus(0)) : this.$grid && this.instance.trigger("onThumbsHide"),
            this.instance.update()
        },
        hide: function() {
            this.isVisible = !1,
            this.update()
        },
        show: function() {
            this.isVisible = !0,
            this.update()
        },
        toggle: function() {
            this.isVisible = !this.isVisible,
            this.update()
        }
    }),
    e(t).on({
        "onInit.fb": function(t, e) {
            var i;
            e && !e.Thumbs && (i = new o(e)).isActive && !0 === i.opts.autoStart && i.show()
        },
        "beforeShow.fb": function(t, e, i, s) {
            (e = e && e.Thumbs) && e.isVisible && e.focus(s ? 0 : 250)
        },
        "afterKeydown.fb": function(t, e, i, s, o) {
            (e = e && e.Thumbs) && e.isActive && 71 === o && (s.preventDefault(),
            e.toggle())
        },
        "beforeClose.fb": function(t, e) {
            (e = e && e.Thumbs) && e.isVisible && !1 !== e.opts.hideOnClose && e.$grid.hide()
        }
    })
}(document, jQuery),
function(t, e) {
    "use strict";
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {
            share: '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg></button>'
        },
        share: {
            url: function(t, e) {
                return !t.currentHash && "inline" !== e.type && "html" !== e.type && (e.origSrc || e.src) || window.location
            },
            tpl: '<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p></div>'
        }
    }),
    e(t).on("click", "[data-fancybox-share]", function() {
        var t, i, s = e.fancybox.getInstance(), o = s.current || null;
        o && ("function" === e.type(o.opts.share.url) && (t = o.opts.share.url.apply(o, [s, o])),
        t = o.opts.share.tpl.replace(/\{\{media\}\}/g, "image" === o.type ? encodeURIComponent(o.src) : "").replace(/\{\{url\}\}/g, encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g, (i = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#x2F;",
            "`": "&#x60;",
            "=": "&#x3D;"
        },
        String(t).replace(/[&<>"'`=\/]/g, function(t) {
            return i[t]
        }))).replace(/\{\{descr\}\}/g, s.$caption ? encodeURIComponent(s.$caption.text()) : ""),
        e.fancybox.open({
            src: s.translate(s, t),
            type: "html",
            opts: {
                touch: !1,
                animationEffect: !1,
                afterLoad: function(t, e) {
                    s.$refs.container.one("beforeClose.fb", function() {
                        t.close(null, 0)
                    }),
                    e.$content.find(".fancybox-share__button").click(function() {
                        return window.open(this.href, "Share", "width=550, height=450"),
                        !1
                    })
                },
                mobile: {
                    autoFocus: !1
                }
            }
        }))
    })
}(document, jQuery),
function(t, e, i) {
    "use strict";
    function s() {
        var e = t.location.hash.substr(1)
          , i = e.split("-")
          , s = 1 < i.length && /^\+?\d+$/.test(i[i.length - 1]) && parseInt(i.pop(-1), 10) || 1;
        return {
            hash: e,
            index: s < 1 ? 1 : s,
            gallery: i.join("-")
        }
    }
    function o(t) {
        "" !== t.gallery && i("[data-fancybox='" + i.escapeSelector(t.gallery) + "']").eq(t.index - 1).focus().trigger("click.fb-start")
    }
    function n(t) {
        return !!t && "" !== (t = (t = (t.current || t).opts).hash || (t.$orig ? t.$orig.data("fancybox") || t.$orig.data("fancybox-trigger") : "")) && t
    }
    i.escapeSelector || (i.escapeSelector = function(t) {
        return (t + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function(t, e) {
            return e ? "\0" === t ? "\xc3\xaf\xc2\xbf\xc2\xbd" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
        })
    }
    ),
    i(function() {
        !1 !== i.fancybox.defaults.hash && (i(e).on({
            "onInit.fb": function(t, e) {
                var i, o;
                !1 !== e.group[e.currIndex].opts.hash && (i = s(),
                (o = n(e)) && i.gallery && o == i.gallery && (e.currIndex = i.index - 1))
            },
            "beforeShow.fb": function(i, s, o, r) {
                var a;
                o && !1 !== o.opts.hash && (a = n(s)) && (s.currentHash = a + (1 < s.group.length ? "-" + (o.index + 1) : ""),
                t.location.hash !== "#" + s.currentHash && (r && !s.origHash && (s.origHash = t.location.hash),
                s.hashTimer && clearTimeout(s.hashTimer),
                s.hashTimer = setTimeout(function() {
                    "replaceState"in t.history ? (t.history[r ? "pushState" : "replaceState"]({}, e.title, t.location.pathname + t.location.search + "#" + s.currentHash),
                    r && (s.hasCreatedHistory = !0)) : t.location.hash = s.currentHash,
                    s.hashTimer = null
                }, 300)))
            },
            "beforeClose.fb": function(i, s, o) {
                o && !1 !== o.opts.hash && (clearTimeout(s.hashTimer),
                s.currentHash && s.hasCreatedHistory ? t.history.back() : s.currentHash && ("replaceState"in t.history ? t.history.replaceState({}, e.title, t.location.pathname + t.location.search + (s.origHash || "")) : t.location.hash = s.origHash),
                s.currentHash = null)
            }
        }),
        i(t).on("hashchange.fb", function() {
            var t = s()
              , e = null;
            i.each(i(".fancybox-container").get().reverse(), function(t, s) {
                if ((s = i(s).data("FancyBox")) && s.currentHash)
                    return e = s,
                    !1
            }),
            e ? e.currentHash === t.gallery + "-" + t.index || 1 === t.index && e.currentHash == t.gallery || (e.currentHash = null,
            e.close()) : "" !== t.gallery && o(t)
        }),
        setTimeout(function() {
            i.fancybox.getInstance() || o(s())
        }, 50))
    })
}(window, document, jQuery),
function(t, e) {
    "use strict";
    var i = (new Date).getTime();
    e(t).on({
        "onInit.fb": function(t, e, s) {
            e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function(t) {
                var s = e.current
                  , o = (new Date).getTime();
                e.group.length < 2 || !1 === s.opts.wheel || "auto" === s.opts.wheel && "image" !== s.type || (t.preventDefault(),
                t.stopPropagation(),
                s.$slide.hasClass("fancybox-animated") || (t = t.originalEvent || t,
                o - i < 250 || (i = o,
                e[0 > (-t.deltaY || -t.deltaX || t.wheelDelta || -t.detail) ? "next" : "previous"]())))
            })
        }
    })
}(document, jQuery);
