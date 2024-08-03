// // import { Carousel, initMDB } from "mdb-ui-kit";
//  import { Carousel, initMDB } from "../../node_modules/mdb-ui-kit";

// initMDB({ Carousel });

(() => {
  "use strict";
  var t = {
          d: (e, i) => {
              for (var s in i) t.o(i, s) && !t.o(e, s) && Object.defineProperty(e, s, {
                  enumerable: !0,
                  get: i[s]
              })
          },
          o: (t, e) => Object.prototype.hasOwnProperty.call(t, e),
          r: t => {
              "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
                  value: "Module"
              }), Object.defineProperty(t, "__esModule", {
                  value: !0
              })
          }
      },
      e = {};

  function i(t) {
      if (this.formData = {}, this.tree = {}, !(t instanceof FormData)) return this;
      this.formData = t;
      const e = () => {
          const t = new Map;
          return t.largestIndex = 0, t.set = function(e, i) {
              "" === e ? e = t.largestIndex++ : /^[0-9]+$/.test(e) && (e = parseInt(e), t.largestIndex <= e && (t.largestIndex = e + 1)), Map.prototype.set.call(t, e, i)
          }, t
      };
      this.tree = e();
      const i = /^(?<name>[a-z][-a-z0-9_:]*)(?<array>(?:\[(?:[a-z][-a-z0-9_:]*|[0-9]*)\])*)/i;
      for (const [t, s] of this.formData) {
          const o = t.match(i);
          if (o)
              if ("" === o.groups.array) this.tree.set(o.groups.name, s);
              else {
                  const t = [...o.groups.array.matchAll(/\[([a-z][-a-z0-9_:]*|[0-9]*)\]/gi)].map((([t, e]) => e));
                  t.unshift(o.groups.name);
                  const i = t.pop();
                  t.reduce(((t, i) => {
                      if (/^[0-9]+$/.test(i) && (i = parseInt(i)), t.get(i) instanceof Map) return t.get(i);
                      const s = e();
                      return t.set(i, s), s
                  }), this.tree).set(i, s)
              }
      }
  }
  t.r(e), t.d(e, {
      all: () => D,
      any: () => M,
      date: () => f,
      dayofweek: () => u,
      email: () => r,
      enum: () => h,
      file: () => m,
      maxdate: () => z,
      maxfilesize: () => $,
      maxitems: () => v,
      maxlength: () => x,
      maxnumber: () => b,
      mindate: () => A,
      minfilesize: () => j,
      minitems: () => w,
      minlength: () => g,
      minnumber: () => y,
      number: () => c,
      required: () => n,
      requiredfile: () => a,
      tel: () => l,
      time: () => d,
      url: () => p
  }), i.prototype.entries = function() {
      return this.tree.entries()
  }, i.prototype.get = function(t) {
      return this.tree.get(t)
  }, i.prototype.getAll = function(t) {
      if (!this.has(t)) return [];
      const e = t => {
          const i = [];
          if (t instanceof Map)
              for (const [s, o] of t) i.push(...e(o));
          else "" !== t && i.push(t);
          return i
      };
      return e(this.get(t))
  }, i.prototype.has = function(t) {
      return this.tree.has(t)
  }, i.prototype.keys = function() {
      return this.tree.keys()
  }, i.prototype.values = function() {
      return this.tree.values()
  };
  const s = i;

  function o({
      rule: t,
      field: e,
      error: i,
      ...s
  }) {
      this.rule = t, this.field = e, this.error = i, this.properties = s
  }
  const n = function(t) {
          if (0 === t.getAll(this.field).length) throw new o(this)
      },
      a = function(t) {
          if (0 === t.getAll(this.field).length) throw new o(this)
      },
      r = function(t) {
          if (!t.getAll(this.field).every((t => {
                  if ((t = t.trim()).length < 6) return !1;
                  if (-1 === t.indexOf("@", 1)) return !1;
                  if (t.indexOf("@") !== t.lastIndexOf("@")) return !1;
                  const [e, i] = t.split("@", 2);
                  if (!/^[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~\.-]+$/.test(e)) return !1;
                  if (/\.{2,}/.test(i)) return !1;
                  if (/(?:^[ \t\n\r\0\x0B.]|[ \t\n\r\0\x0B.]$)/.test(i)) return !1;
                  const s = i.split(".");
                  if (s.length < 2) return !1;
                  for (const t of s) {
                      if (/(?:^[ \t\n\r\0\x0B-]|[ \t\n\r\0\x0B-]$)/.test(t)) return !1;
                      if (!/^[a-z0-9-]+$/i.test(t)) return !1
                  }
                  return !0
              }))) throw new o(this)
      },
      p = function(t) {
          const e = t.getAll(this.field);
          if (!e.every((t => {
                  if ("" === (t = t.trim())) return !1;
                  try {
                      return (t => -1 !== ["http", "https", "ftp", "ftps", "mailto", "news", "irc", "irc6", "ircs", "gopher", "nntp", "feed", "telnet", "mms", "rtsp", "sms", "svn", "tel", "fax", "xmpp", "webcal", "urn"].indexOf(t))(new URL(t).protocol.replace(/:$/, ""))
                  } catch {
                      return !1
                  }
              }))) throw new o(this)
      },
      l = function(t) {
          if (!t.getAll(this.field).every((t => (t = (t = t.trim()).replaceAll(/[()/.*#\s-]+/g, ""), /^[+]?[0-9]+$/.test(t))))) throw new o(this)
      },
      c = function(t) {
          if (!t.getAll(this.field).every((t => (t = t.trim(), !!/^[-]?[0-9]+(?:[eE][+-]?[0-9]+)?$/.test(t) || !!/^[-]?(?:[0-9]+)?[.][0-9]+(?:[eE][+-]?[0-9]+)?$/.test(t))))) throw new o(this)
      },
      f = function(t) {
          if (!t.getAll(this.field).every((t => {
                  if (t = t.trim(), !/^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(t)) return !1;
                  const e = new Date(t);
                  return !Number.isNaN(e.valueOf())
              }))) throw new o(this)
      },
      d = function(t) {
          if (!t.getAll(this.field).every((t => {
                  const e = t.trim().match(/^([0-9]{2})\:([0-9]{2})(?:\:([0-9]{2}))?$/);
                  if (!e) return !1;
                  const i = parseInt(e[1]),
                      s = parseInt(e[2]),
                      o = e[3] ? parseInt(e[3]) : 0;
                  return 0 <= i && i <= 23 && 0 <= s && s <= 59 && 0 <= o && o <= 59
              }))) throw new o(this)
      },
      m = function(t) {
          if (!t.getAll(this.field).every((t => t instanceof File && this.accept?.some((e => /^\.[a-z0-9]+$/i.test(e) ? t.name.toLowerCase().endsWith(e.toLowerCase()) : (t => {
                  const e = [],
                      i = t.match(/^(?<toplevel>[a-z]+)\/(?<sub>[*]|[a-z0-9.+-]+)$/i);
                  if (i) {
                      const t = i.groups.toplevel.toLowerCase(),
                          s = i.groups.sub.toLowerCase();
                      for (const [o, n] of(() => {
                              const t = new Map;
                              return t.set("jpg|jpeg|jpe", "image/jpeg"), t.set("gif", "image/gif"), t.set("png", "image/png"), t.set("bmp", "image/bmp"), t.set("tiff|tif", "image/tiff"), t.set("webp", "image/webp"), t.set("ico", "image/x-icon"), t.set("heic", "image/heic"), t.set("asf|asx", "video/x-ms-asf"), t.set("wmv", "video/x-ms-wmv"), t.set("wmx", "video/x-ms-wmx"), t.set("wm", "video/x-ms-wm"), t.set("avi", "video/avi"), t.set("divx", "video/divx"), t.set("flv", "video/x-flv"), t.set("mov|qt", "video/quicktime"), t.set("mpeg|mpg|mpe", "video/mpeg"), t.set("mp4|m4v", "video/mp4"), t.set("ogv", "video/ogg"), t.set("webm", "video/webm"), t.set("mkv", "video/x-matroska"), t.set("3gp|3gpp", "video/3gpp"), t.set("3g2|3gp2", "video/3gpp2"), t.set("txt|asc|c|cc|h|srt", "text/plain"), t.set("csv", "text/csv"), t.set("tsv", "text/tab-separated-values"), t.set("ics", "text/calendar"), t.set("rtx", "text/richtext"), t.set("css", "text/css"), t.set("htm|html", "text/html"), t.set("vtt", "text/vtt"), t.set("dfxp", "application/ttaf+xml"), t.set("mp3|m4a|m4b", "audio/mpeg"), t.set("aac", "audio/aac"), t.set("ra|ram", "audio/x-realaudio"), t.set("wav", "audio/wav"), t.set("ogg|oga", "audio/ogg"), t.set("flac", "audio/flac"), t.set("mid|midi", "audio/midi"), t.set("wma", "audio/x-ms-wma"), t.set("wax", "audio/x-ms-wax"), t.set("mka", "audio/x-matroska"), t.set("rtf", "application/rtf"), t.set("js", "application/javascript"), t.set("pdf", "application/pdf"), t.set("swf", "application/x-shockwave-flash"), t.set("class", "application/java"), t.set("tar", "application/x-tar"), t.set("zip", "application/zip"), t.set("gz|gzip", "application/x-gzip"), t.set("rar", "application/rar"), t.set("7z", "application/x-7z-compressed"), t.set("exe", "application/x-msdownload"), t.set("psd", "application/octet-stream"), t.set("xcf", "application/octet-stream"), t.set("doc", "application/msword"), t.set("pot|pps|ppt", "application/vnd.ms-powerpoint"), t.set("wri", "application/vnd.ms-write"), t.set("xla|xls|xlt|xlw", "application/vnd.ms-excel"), t.set("mdb", "application/vnd.ms-access"), t.set("mpp", "application/vnd.ms-project"), t.set("docx", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"), t.set("docm", "application/vnd.ms-word.document.macroEnabled.12"), t.set("dotx", "application/vnd.openxmlformats-officedocument.wordprocessingml.template"), t.set("dotm", "application/vnd.ms-word.template.macroEnabled.12"), t.set("xlsx", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"), t.set("xlsm", "application/vnd.ms-excel.sheet.macroEnabled.12"), t.set("xlsb", "application/vnd.ms-excel.sheet.binary.macroEnabled.12"), t.set("xltx", "application/vnd.openxmlformats-officedocument.spreadsheetml.template"), t.set("xltm", "application/vnd.ms-excel.template.macroEnabled.12"), t.set("xlam", "application/vnd.ms-excel.addin.macroEnabled.12"), t.set("pptx", "application/vnd.openxmlformats-officedocument.presentationml.presentation"), t.set("pptm", "application/vnd.ms-powerpoint.presentation.macroEnabled.12"), t.set("ppsx", "application/vnd.openxmlformats-officedocument.presentationml.slideshow"), t.set("ppsm", "application/vnd.ms-powerpoint.slideshow.macroEnabled.12"), t.set("potx", "application/vnd.openxmlformats-officedocument.presentationml.template"), t.set("potm", "application/vnd.ms-powerpoint.template.macroEnabled.12"), t.set("ppam", "application/vnd.ms-powerpoint.addin.macroEnabled.12"), t.set("sldx", "application/vnd.openxmlformats-officedocument.presentationml.slide"), t.set("sldm", "application/vnd.ms-powerpoint.slide.macroEnabled.12"), t.set("onetoc|onetoc2|onetmp|onepkg", "application/onenote"), t.set("oxps", "application/oxps"), t.set("xps", "application/vnd.ms-xpsdocument"), t.set("odt", "application/vnd.oasis.opendocument.text"), t.set("odp", "application/vnd.oasis.opendocument.presentation"), t.set("ods", "application/vnd.oasis.opendocument.spreadsheet"), t.set("odg", "application/vnd.oasis.opendocument.graphics"), t.set("odc", "application/vnd.oasis.opendocument.chart"), t.set("odb", "application/vnd.oasis.opendocument.database"), t.set("odf", "application/vnd.oasis.opendocument.formula"), t.set("wp|wpd", "application/wordperfect"), t.set("key", "application/vnd.apple.keynote"), t.set("numbers", "application/vnd.apple.numbers"), t.set("pages", "application/vnd.apple.pages"), t
                          })())("*" === s && n.startsWith(t + "/") || n === i[0]) && e.push(...o.split("|"))
                  }
                  return e
              })(e).some((e => (e = "." + e.trim(), t.name.toLowerCase().endsWith(e.toLowerCase()))))))))) throw new o(this)
      },
      h = function(t) {
          if (!t.getAll(this.field).every((t => this.accept?.some((e => t === String(e)))))) throw new o(this)
      },
      u = function(t) {
          if (!t.getAll(this.field).every((t => {
                  const e = 0 === (i = new Date(t).getDay()) ? 7 : i;
                  var i;
                  return this.accept?.some((t => e === parseInt(t)))
              }))) throw new o(this)
      },
      w = function(t) {
          if (t.getAll(this.field).length < parseInt(this.threshold)) throw new o(this)
      },
      v = function(t) {
          const e = t.getAll(this.field);
          if (parseInt(this.threshold) < e.length) throw new o(this)
      },
      g = function(t) {
          const e = t.getAll(this.field);
          let i = 0;
          if (e.forEach((t => {
                  "string" == typeof t && (i += t.length)
              })), 0 !== i && i < parseInt(this.threshold)) throw new o(this)
      },
      x = function(t) {
          const e = t.getAll(this.field);
          let i = 0;
          if (e.forEach((t => {
                  "string" == typeof t && (i += t.length)
              })), parseInt(this.threshold) < i) throw new o(this)
      },
      y = function(t) {
          if (!t.getAll(this.field).every((t => !(parseFloat(t) < parseFloat(this.threshold))))) throw new o(this)
      },
      b = function(t) {
          if (!t.getAll(this.field).every((t => !(parseFloat(this.threshold) < parseFloat(t))))) throw new o(this)
      },
      A = function(t) {
          if (!t.getAll(this.field).every((t => (t = t.trim(), !(/^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(t) && /^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(this.threshold) && t < this.threshold))))) throw new o(this)
      },
      z = function(t) {
          if (!t.getAll(this.field).every((t => (t = t.trim(), !(/^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(t) && /^[0-9]{4,}-[0-9]{2}-[0-9]{2}$/.test(this.threshold) && this.threshold < t))))) throw new o(this)
      },
      j = function(t) {
          const e = t.getAll(this.field);
          let i = 0;
          if (e.forEach((t => {
                  t instanceof File && (i += t.size)
              })), i < parseInt(this.threshold)) throw new o(this)
      },
      $ = function(t) {
          const e = t.getAll(this.field);
          let i = 0;
          if (e.forEach((t => {
                  t instanceof File && (i += t.size)
              })), parseInt(this.threshold) < i) throw new o(this)
      },
      I = ({
          ruleObj: t,
          options: i
      }) => {
          const {
              rule: s,
              ...o
          } = t;
          return "function" == typeof e[s] && ("function" != typeof e[s].matches || e[s].matches(o, i))
      },
      O = ({
          ruleObj: t,
          formDataTree: i,
          options: s
      }) => {
          const {
              rule: o
          } = t;
          e[o].call(t, i, s)
      },
      E = [],
      k = t => [...E].reduce(((t, e) => i => e(i, t)), t),
      D = function(t, e = {}) {
          const i = (this.rules ?? []).filter((t => I({
                  ruleObj: t,
                  options: e
              }))),
              s = k(O);
          if (!i.every((i => {
                  try {
                      s({
                          ruleObj: i,
                          formDataTree: t,
                          options: e
                      })
                  } catch (t) {
                      if (!(t instanceof o)) throw t;
                      if (void 0 !== t.error) throw t;
                      return !1
                  }
                  return !0
              }))) throw new o(this)
      },
      M = function(t, e = {}) {
          const i = (this.rules ?? []).filter((t => I({
                  ruleObj: t,
                  options: e
              }))),
              s = k(O);
          if (!i.some((i => {
                  try {
                      s({
                          ruleObj: i,
                          formDataTree: t,
                          options: e
                      })
                  } catch (t) {
                      if (!(t instanceof o)) throw t;
                      return !1
                  }
                  return !0
              }))) throw new o(this)
      };
  var F;
  window.swv = {
      validators: e,
      validate: (t, e, i = {}) => {
          const n = (t.rules ?? []).filter((t => I({
              ruleObj: t,
              options: i
          })));
          if (!n.length) return new Map;
          const a = k(O),
              r = new s(e),
              p = n.reduce(((t, e) => {
                  try {
                      a({
                          ruleObj: e,
                          formDataTree: r,
                          options: i
                      })
                  } catch (e) {
                      if (!(e instanceof o)) throw e;
                      if (void 0 !== e.field && !t.has(e.field) && void 0 !== e.error) return t.set(e.field, e)
                  }
                  return t
              }), new Map);
          for (const t of r.keys()) p.has(t) || p.set(t, {
              validInputs: r.getAll(t)
          });
          return p
      },
      use: t => {
          E.push(t)
      },
      ...null !== (F = window.swv) && void 0 !== F ? F : {}
  }
})();

// Initialization for ES Users



  (() => {
    "use strict";
    const e = e => Math.abs(parseInt(e, 10)),
        t = (e, t, a) => {
            const n = new CustomEvent(`wpcf7${t}`, {
                bubbles: !0,
                detail: a
            });
            "string" == typeof e && (e = document.querySelector(e)), e.dispatchEvent(n)
        },
        a = (e, a) => {
            const n = new Map([
                ["init", "init"],
                ["validation_failed", "invalid"],
                ["acceptance_missing", "unaccepted"],
                ["spam", "spam"],
                ["aborted", "aborted"],
                ["mail_sent", "sent"],
                ["mail_failed", "failed"],
                ["submitting", "submitting"],
                ["resetting", "resetting"],
                ["validating", "validating"],
                ["payment_required", "payment-required"]
            ]);
            n.has(a) && (a = n.get(a)), Array.from(n.values()).includes(a) || (a = `custom-${a=(a=a.replace(/[^0-9a-z]+/i," ").trim()).replace(/\s+/,"-")}`);
            const r = e.getAttribute("data-status");
            if (e.wpcf7.status = a, e.setAttribute("data-status", a), e.classList.add(a), r && r !== a) {
                e.classList.remove(r);
                const a = {
                    contactFormId: e.wpcf7.id,
                    pluginVersion: e.wpcf7.pluginVersion,
                    contactFormLocale: e.wpcf7.locale,
                    unitTag: e.wpcf7.unitTag,
                    containerPostId: e.wpcf7.containerPost,
                    status: e.wpcf7.status,
                    prevStatus: r
                };
                t(e, "statuschanged", a)
            }
            return a
        },
        n = e => {
            const {
                root: t,
                namespace: a = "contact-form-7/v1"
            } = wpcf7.api;
            return r.reduceRight(((e, t) => a => t(a, e)), (e => {
                let n, r, {
                    url: o,
                    path: c,
                    endpoint: s,
                    headers: i,
                    body: l,
                    data: p,
                    ...d
                } = e;
                "string" == typeof s && (n = a.replace(/^\/|\/$/g, ""), r = s.replace(/^\//, ""), c = r ? n + "/" + r : n), "string" == typeof c && (-1 !== t.indexOf("?") && (c = c.replace("?", "&")), c = c.replace(/^\//, ""), o = t + c), i = {
                    Accept: "application/json, */*;q=0.1",
                    ...i
                }, delete i["X-WP-Nonce"], p && (l = JSON.stringify(p), i["Content-Type"] = "application/json");
                const u = {
                        code: "fetch_error",
                        message: "You are probably offline."
                    },
                    f = {
                        code: "invalid_json",
                        message: "The response is not a valid JSON response."
                    };
                return window.fetch(o || c || window.location.href, {
                    ...d,
                    headers: i,
                    body: l
                }).then((e => Promise.resolve(e).then((e => {
                    if (e.status >= 200 && e.status < 300) return e;
                    throw e
                })).then((e => {
                    if (204 === e.status) return null;
                    if (e && e.json) return e.json().catch((() => {
                        throw f
                    }));
                    throw f
                }))), (() => {
                    throw u
                }))
            }))(e)
        },
        r = [];

    function o(e, t = {}) {
        const {
            target: n,
            scope: r = e,
            ...o
        } = t;
        if (void 0 === e.wpcf7?.schema) return;
        const l = {
            ...e.wpcf7.schema
        };
        if (void 0 !== n) {
            if (!e.contains(n)) return;
            if (!n.closest(".wpcf7-form-control-wrap[data-name]")) return;
            if (n.closest(".novalidate")) return
        }
        const p = r.querySelectorAll(".wpcf7-form-control-wrap"),
            d = Array.from(p).reduce(((e, t) => (t.closest(".novalidate") || t.querySelectorAll(":where( input, textarea, select ):enabled").forEach((t => {
                if (t.name) switch (t.type) {
                    case "button":
                    case "image":
                    case "reset":
                    case "submit":
                        break;
                    case "checkbox":
                    case "radio":
                        t.checked && e.append(t.name, t.value);
                        break;
                    case "select-multiple":
                        for (const a of t.selectedOptions) e.append(t.name, a.value);
                        break;
                    case "file":
                        for (const a of t.files) e.append(t.name, a);
                        break;
                    default:
                        e.append(t.name, t.value)
                }
            })), e)), new FormData),
            u = e.getAttribute("data-status");
        Promise.resolve(a(e, "validating")).then((a => {
            if (void 0 !== swv) {
                const a = swv.validate(l, d, t);
                for (const t of p) {
                    if (void 0 === t.dataset.name) continue;
                    const o = t.dataset.name;
                    if (a.has(o)) {
                        const {
                            error: t,
                            validInputs: n
                        } = a.get(o);
                        s(e, o), void 0 !== t && c(e, o, t, {
                            scope: r
                        }), i(e, o, null != n ? n : [])
                    }
                    if (t.contains(n)) break
                }
            }
        })).finally((() => {
            a(e, u)
        }))
    }
    n.use = e => {
        r.unshift(e)
    };
    const c = (e, t, a, n) => {
            const {
                scope: r = e,
                ...o
            } = null != n ? n : {}, c = `${e.wpcf7?.unitTag}-ve-${t}`.replaceAll(/[^0-9a-z_-]+/gi, ""), s = e.querySelector(`.wpcf7-form-control-wrap[data-name="${t}"] .wpcf7-form-control`);
            (() => {
                const t = document.createElement("li");
                t.setAttribute("id", c), s && s.id ? t.insertAdjacentHTML("beforeend", `<a href="#${s.id}">${a}</a>`) : t.insertAdjacentText("beforeend", a), e.wpcf7.parent.querySelector(".screen-reader-response ul").appendChild(t)
            })(), r.querySelectorAll(`.wpcf7-form-control-wrap[data-name="${t}"]`).forEach((e => {
                const t = document.createElement("span");
                t.classList.add("wpcf7-not-valid-tip"), t.setAttribute("aria-hidden", "true"), t.insertAdjacentText("beforeend", a), e.appendChild(t), e.querySelectorAll("[aria-invalid]").forEach((e => {
                    e.setAttribute("aria-invalid", "true")
                })), e.querySelectorAll(".wpcf7-form-control").forEach((e => {
                    e.classList.add("wpcf7-not-valid"), e.setAttribute("aria-describedby", c), "function" == typeof e.setCustomValidity && e.setCustomValidity(a), e.closest(".use-floating-validation-tip") && (e.addEventListener("focus", (e => {
                        t.setAttribute("style", "display: none")
                    })), t.addEventListener("click", (e => {
                        t.setAttribute("style", "display: none")
                    })))
                }))
            }))
        },
        s = (e, t) => {
            const a = `${e.wpcf7?.unitTag}-ve-${t}`.replaceAll(/[^0-9a-z_-]+/gi, "");
            e.wpcf7.parent.querySelector(`.screen-reader-response ul li#${a}`)?.remove(), e.querySelectorAll(`.wpcf7-form-control-wrap[data-name="${t}"]`).forEach((e => {
                e.querySelector(".wpcf7-not-valid-tip")?.remove(), e.querySelectorAll("[aria-invalid]").forEach((e => {
                    e.setAttribute("aria-invalid", "false")
                })), e.querySelectorAll(".wpcf7-form-control").forEach((e => {
                    e.removeAttribute("aria-describedby"), e.classList.remove("wpcf7-not-valid"), "function" == typeof e.setCustomValidity && e.setCustomValidity("")
                }))
            }))
        },
        i = (e, t, a) => {
            e.querySelectorAll(`[data-reflection-of="${t}"]`).forEach((e => {
                if ("output" === e.tagName.toLowerCase()) {
                    const t = e;
                    0 === a.length && a.push(t.dataset.default), a.slice(0, 1).forEach((e => {
                        e instanceof File && (e = e.name), t.textContent = e
                    }))
                } else e.querySelectorAll("output").forEach((e => {
                    e.hasAttribute("data-default") ? 0 === a.length ? e.removeAttribute("hidden") : e.setAttribute("hidden", "hidden") : e.remove()
                })), a.forEach((a => {
                    a instanceof File && (a = a.name);
                    const n = document.createElement("output");
                    n.setAttribute("name", t), n.textContent = a, e.appendChild(n)
                }))
            }))
        };

   
    n.use(((e, n) => {
        if (e.wpcf7 && "feedback" === e.wpcf7.endpoint) {
            const {
                form: n,
                detail: r
            } = e.wpcf7;
            p(n), t(n, "beforesubmit", r), a(n, "submitting")
        }
        return n(e)
    }));
    const p = e => {
        e.querySelectorAll(".wpcf7-form-control-wrap").forEach((t => {
            t.dataset.name && s(e, t.dataset.name)
        })), e.wpcf7.parent.querySelector('.screen-reader-response [role="status"]').innerText = "", e.querySelectorAll(".wpcf7-response-output").forEach((e => {
            e.innerText = ""
        }))
    };

    function d(e) {
        const r = new FormData(e),
            o = {
                contactFormId: e.wpcf7.id,
                pluginVersion: e.wpcf7.pluginVersion,
                contactFormLocale: e.wpcf7.locale,
                unitTag: e.wpcf7.unitTag,
                containerPostId: e.wpcf7.containerPost,
                status: e.wpcf7.status,
                inputs: Array.from(r, (e => {
                    const t = e[0],
                        a = e[1];
                    return !t.match(/^_/) && {
                        name: t,
                        value: a
                    }
                })).filter((e => !1 !== e)),
                formData: r
            };
        n({
            endpoint: `contact-forms/${e.wpcf7.id}/refill`,
            method: "GET",
            wpcf7: {
                endpoint: "refill",
                form: e,
                detail: o
            }
        }).then((n => {
            e.wpcf7.resetOnMailSent ? (delete e.wpcf7.resetOnMailSent, a(e, "mail_sent")) : a(e, "init"), o.apiResponse = n, t(e, "reset", o)
        })).catch((e => console.error(e)))
    }
    n.use(((e, t) => {
        if (e.wpcf7 && "refill" === e.wpcf7.endpoint) {
            const {
                form: t,
                detail: n
            } = e.wpcf7;
            p(t), a(t, "resetting")
        }
        return t(e)
    }));
    const u = (e, t) => {
            for (const a in t) {
                const n = t[a];
                e.querySelectorAll(`input[name="${a}"]`).forEach((e => {
                    e.value = ""
                })), e.querySelectorAll(`img.wpcf7-captcha-${a.replaceAll(":","")}`).forEach((e => {
                    e.setAttribute("src", n)
                }));
                const r = /([0-9]+)\.(png|gif|jpeg)$/.exec(n);
                r && e.querySelectorAll(`input[name="_wpcf7_captcha_challenge_${a}"]`).forEach((e => {
                    e.value = r[1]
                }))
            }
        },
        f = (e, t) => {
            for (const a in t) {
                const n = t[a][0],
                    r = t[a][1];
                e.querySelectorAll(`.wpcf7-form-control-wrap[data-name="${a}"]`).forEach((e => {
                    e.querySelector(`input[name="${a}"]`).value = "", e.querySelector(".wpcf7-quiz-label").textContent = n, e.querySelector(`input[name="_wpcf7_quiz_answer_${a}"]`).value = r
                }))
            }
        };

    function m(t) {
        const a = new FormData(t);
        t.wpcf7 = {
            id: e(a.get("_wpcf7")),
            status: t.getAttribute("data-status"),
            pluginVersion: a.get("_wpcf7_version"),
            locale: a.get("_wpcf7_locale"),
            unitTag: a.get("_wpcf7_unit_tag"),
            containerPost: e(a.get("_wpcf7_container_post")),
            parent: t.closest(".wpcf7"),
            get schema() {
                return wpcf7.schemas.get(this.id)
            }
        }, wpcf7.schemas.set(t.wpcf7.id, void 0), t.querySelectorAll(".has-spinner").forEach((e => {
            e.insertAdjacentHTML("afterend", '<span class="wpcf7-spinner"></span>')
        })), (e => {
            e.querySelectorAll(".wpcf7-exclusive-checkbox").forEach((t => {
                t.addEventListener("change", (t => {
                    const a = t.target.getAttribute("name");
                    e.querySelectorAll(`input[type="checkbox"][name="${a}"]`).forEach((e => {
                        e !== t.target && (e.checked = !1)
                    }))
                }))
            }))
        })(t), (e => {
            e.querySelectorAll(".has-free-text").forEach((t => {
                const a = t.querySelector("input.wpcf7-free-text"),
                    n = t.querySelector('input[type="checkbox"], input[type="radio"]');
                a.disabled = !n.checked, e.addEventListener("change", (e => {
                    a.disabled = !n.checked, e.target === n && n.checked && a.focus()
                }))
            }))
        })(t), (e => {
            e.querySelectorAll(".wpcf7-validates-as-url").forEach((e => {
                e.addEventListener("change", (t => {
                    let a = e.value.trim();
                    a && !a.match(/^[a-z][a-z0-9.+-]*:/i) && -1 !== a.indexOf(".") && (a = a.replace(/^\/+/, ""), a = "http://" + a), e.value = a
                }))
            }))
        })(t), (e => {
            if (!e.querySelector(".wpcf7-acceptance") || e.classList.contains("wpcf7-acceptance-as-validation")) return;
            const t = () => {
                let t = !0;
                e.querySelectorAll(".wpcf7-acceptance").forEach((e => {
                    if (!t || e.classList.contains("optional")) return;
                    const a = e.querySelector('input[type="checkbox"]');
                    (e.classList.contains("invert") && a.checked || !e.classList.contains("invert") && !a.checked) && (t = !1)
                })), e.querySelectorAll(".wpcf7-submit").forEach((e => {
                    e.disabled = !t
                }))
            };
            t(), e.addEventListener("change", (e => {
                t()
            })), e.addEventListener("wpcf7reset", (e => {
                t()
            }))
        })(t), (t => {
            const a = (t, a) => {
                    const n = e(t.getAttribute("data-starting-value")),
                        r = e(t.getAttribute("data-maximum-value")),
                        o = e(t.getAttribute("data-minimum-value")),
                        c = t.classList.contains("down") ? n - a.value.length : a.value.length;
                    t.setAttribute("data-current-value", c), t.innerText = c, r && r < a.value.length ? t.classList.add("too-long") : t.classList.remove("too-long"), o && a.value.length < o ? t.classList.add("too-short") : t.classList.remove("too-short")
                },
                n = e => {
                    e = {
                        init: !1,
                        ...e
                    }, t.querySelectorAll(".wpcf7-character-count").forEach((n => {
                        const r = n.getAttribute("data-target-name"),
                            o = t.querySelector(`[name="${r}"]`);
                        o && (o.value = o.defaultValue, a(n, o), e.init && o.addEventListener("keyup", (e => {
                            a(n, o)
                        })))
                    }))
                };
            n({
                init: !0
            }), t.addEventListener("wpcf7reset", (e => {
                n()
            }))
        })(t), window.addEventListener("load", (e => {
            wpcf7.cached && t.reset()
        })), t.addEventListener("reset", (e => {
            wpcf7.reset(t)
        })), t.addEventListener("submit", (e => {
            wpcf7.submit(t, {
                submitter: e.submitter
            }), e.preventDefault()
        })), t.addEventListener("wpcf7submit", (e => {
            e.detail.apiResponse.captcha && u(t, e.detail.apiResponse.captcha), e.detail.apiResponse.quiz && f(t, e.detail.apiResponse.quiz)
        })), t.addEventListener("wpcf7reset", (e => {
            e.detail.apiResponse.captcha && u(t, e.detail.apiResponse.captcha), e.detail.apiResponse.quiz && f(t, e.detail.apiResponse.quiz)
        })), t.addEventListener("change", (e => {
            e.target.closest(".wpcf7-form-control") && wpcf7.validate(t, {
                target: e.target
            })
        })), t.addEventListener("wpcf7statuschanged", (e => {
            const a = e.detail.status;
            t.querySelectorAll(".active-on-any").forEach((e => {
                e.removeAttribute("inert"), e.classList.remove("active-on-any")
            })), t.querySelectorAll(`.inert-on-${a}`).forEach((e => {
                e.setAttribute("inert", "inert"), e.classList.add("active-on-any")
            }))
        }))
    }
    document.addEventListener("DOMContentLoaded", (e => {
        var t;
        if ("undefined" != typeof wpcf7)
            if (void 0 !== wpcf7.api)
                if ("function" == typeof window.fetch)
                    if ("function" == typeof window.FormData)
                        if ("function" == typeof NodeList.prototype.forEach)
                            if ("function" == typeof String.prototype.replaceAll) {
                                wpcf7 = {
                                    init: m,
                                    submit: l,
                                    reset: d,
                                    validate: o,
                                    schemas: new Map,
                                    ...null !== (t = wpcf7) && void 0 !== t ? t : {}
                                }, document.querySelectorAll(".wpcf7 > form").forEach((e => {
                                    wpcf7.init(e), e.closest(".wpcf7").classList.replace("no-js", "js")
                                }));
                                for (const e of wpcf7.schemas.keys()) n({
                                    endpoint: `contact-forms/${e}/feedback/schema`,
                                    method: "GET"
                                }).then((t => {
                                    wpcf7.schemas.set(e, t)
                                }))
                            } else console.error("Your browser does not support String.replaceAll().");
        else console.error("Your browser does not support NodeList.forEach().");
        else console.error("Your browser does not support window.FormData().");
        else console.error("Your browser does not support window.fetch().");
        else console.error("wpcf7.api is not defined.");
        else console.error("wpcf7 is not defined.")
    }))
})();

  