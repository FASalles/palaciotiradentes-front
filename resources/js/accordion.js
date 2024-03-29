const $ =
    window.$ +
    (function ($) {
        "use strict";
        function Plugin(action, options) {
            var args;
            return (
                (args = Array.prototype.slice.call(arguments, 1)),
                this.each(function () {
                    var $this, data;
                    ($this = $(this)),
                        (data = $this.data("vc.accordion")),
                        data ||
                            ((data = new Accordion(
                                $this,
                                $.extend(!0, {}, options)
                            )),
                            $this.data("vc.accordion", data)),
                        "string" == typeof action &&
                            data[action].apply(data, args);
                })
            );
        }
        var Accordion, clickHandler, old, hashNavigation;
        (Accordion = function ($element, options) {
            (this.$element = $element),
                (this.activeClass = "vc_active"),
                (this.animatingClass = "vc_animating"),
                (this.useCacheFlag = void 0),
                (this.$target = void 0),
                (this.$targetContent = void 0),
                (this.selector = void 0),
                (this.$container = void 0),
                (this.animationDuration = void 0),
                (this.index = 0);
        }),
            (Accordion.transitionEvent = function () {
                var transition, transitions, el;
                (el = document.createElement("vcFakeElement")),
                    (transitions = {
                        transition: "transitionend",
                        MSTransition: "msTransitionEnd",
                        MozTransition: "transitionend",
                        WebkitTransition: "webkitTransitionEnd",
                    });
                for (transition in transitions)
                    if ("undefined" != typeof el.style[transition])
                        return transitions[transition];
            }),
            (Accordion.emulateTransitionEnd = function ($el, duration) {
                var callback, called;
                (called = !1),
                    duration || (duration = 250),
                    $el.one(Accordion.transitionName, function () {
                        called = !0;
                    }),
                    (callback = function () {
                        called || $el.trigger(Accordion.transitionName);
                    }),
                    setTimeout(callback, duration);
            }),
            (Accordion.DEFAULT_TYPE = "collapse"),
            (Accordion.transitionName = Accordion.transitionEvent()),
            (Accordion.prototype.controller = function (options) {
                var $this;
                $this = this.$element;
                var action = options;
                "string" != typeof action &&
                    (action =
                        $this.data("vcAction") ||
                        this.getContainer().data("vcAction")),
                    "undefined" == typeof action &&
                        (action = Accordion.DEFAULT_TYPE),
                    "string" == typeof action &&
                        Plugin.call($this, action, options);
            }),
            (Accordion.prototype.isCacheUsed = function () {
                var useCache, that;
                return (
                    (that = this),
                    (useCache = function () {
                        return !1 !== that.$element.data("vcUseCache");
                    }),
                    "undefined" == typeof this.useCacheFlag &&
                        (this.useCacheFlag = useCache()),
                    this.useCacheFlag
                );
            }),
            (Accordion.prototype.getSelector = function () {
                var findSelector, $this;
                return (
                    ($this = this.$element),
                    (findSelector = function () {
                        var selector;
                        return (
                            (selector = $this.data("vcTarget")),
                            selector || (selector = $this.attr("href")),
                            selector
                        );
                    }),
                    this.isCacheUsed()
                        ? ("undefined" == typeof this.selector &&
                              (this.selector = findSelector()),
                          this.selector)
                        : findSelector()
                );
            }),
            (Accordion.prototype.findContainer = function () {
                var $container;
                return (
                    ($container = this.$element.closest(
                        this.$element.data("vcContainer")
                    )),
                    $container.length || ($container = $("body")),
                    $container
                );
            }),
            (Accordion.prototype.getContainer = function () {
                return this.isCacheUsed()
                    ? ("undefined" == typeof this.$container &&
                          (this.$container = this.findContainer()),
                      this.$container)
                    : this.findContainer();
            }),
            (Accordion.prototype.getTarget = function () {
                var selector, that, getTarget;
                return (
                    (that = this),
                    (selector = that.getSelector()),
                    (getTarget = function () {
                        var element;
                        return (
                            (element = that.getContainer().find(selector)),
                            element.length ||
                                (element = that
                                    .getContainer()
                                    .filter(selector)),
                            element
                        );
                    }),
                    this.isCacheUsed()
                        ? ("undefined" == typeof this.$target &&
                              (this.$target = getTarget()),
                          this.$target)
                        : getTarget()
                );
            }),
            (Accordion.prototype.getTargetContent = function () {
                var $target, $targetContent;
                return (
                    ($target = this.getTarget()),
                    this.isCacheUsed()
                        ? ("undefined" == typeof this.$targetContent &&
                              (($targetContent = $target),
                              $target.data("vcContent") &&
                                  (($targetContent = $target.find(
                                      $target.data("vcContent")
                                  )),
                                  $targetContent.length ||
                                      ($targetContent = $target)),
                              (this.$targetContent = $targetContent)),
                          this.$targetContent)
                        : $target.data("vcContent") &&
                          (($targetContent = $target.find(
                              $target.data("vcContent")
                          )),
                          $targetContent.length)
                        ? $targetContent
                        : $target
                );
            }),
            (Accordion.prototype.getTriggers = function () {
                var i;
                return (
                    (i = 0),
                    this.getContainer()
                        .find("[data-vc-accordion]")
                        .each(function () {
                            var accordion, $this;
                            ($this = $(this)),
                                (accordion = $this.data("vc.accordion")),
                                "undefined" == typeof accordion &&
                                    ($this.vcAccordion(),
                                    (accordion = $this.data("vc.accordion"))),
                                accordion &&
                                    accordion.setIndex &&
                                    accordion.setIndex(i++);
                        })
                );
            }),
            (Accordion.prototype.setIndex = function (index) {
                this.index = index;
            }),
            (Accordion.prototype.getIndex = function () {
                return this.index;
            }),
            (Accordion.prototype.triggerEvent = function (event) {
                var $event;
                "string" == typeof event &&
                    (($event = $.Event(event)), this.$element.trigger($event));
            }),
            (Accordion.prototype.getActiveTriggers = function () {
                var $triggers;
                return ($triggers = this.getTriggers().filter(function () {
                    var $this, accordion;
                    return (
                        ($this = $(this)),
                        (accordion = $this.data("vc.accordion")),
                        accordion.getTarget().hasClass(accordion.activeClass)
                    );
                }));
            }),
            (Accordion.prototype.changeLocationHash = function () {
                var id, $target;
                ($target = this.getTarget()),
                    $target.length && (id = $target.attr("id")),
                    id &&
                        (history.pushState
                            ? history.pushState(null, null, "#" + id)
                            : (location.hash = "#" + id));
            }),
            (Accordion.prototype.isActive = function () {
                return this.getTarget().hasClass(this.activeClass);
            }),
            (Accordion.prototype.getAnimationDuration = function () {
                var findAnimationDuration, that;
                return (
                    (that = this),
                    (findAnimationDuration = function () {
                        var $targetContent, duration;
                        return "undefined" == typeof Accordion.transitionName
                            ? "0s"
                            : (($targetContent = that.getTargetContent()),
                              (duration = $targetContent.css(
                                  "transition-duration"
                              )),
                              (duration = duration.split(",")[0]));
                    }),
                    this.isCacheUsed()
                        ? ("undefined" == typeof this.animationDuration &&
                              (this.animationDuration =
                                  findAnimationDuration()),
                          this.animationDuration)
                        : findAnimationDuration()
                );
            }),
            (Accordion.prototype.getAnimationDurationMilliseconds =
                function () {
                    var duration;
                    return (
                        (duration = this.getAnimationDuration()),
                        "ms" === duration.substr(-2)
                            ? parseInt(duration)
                            : "s" === duration.substr(-1)
                            ? Math.round(1e3 * parseFloat(duration))
                            : void 0
                    );
                }),
            (Accordion.prototype.isAnimated = function () {
                return parseFloat(this.getAnimationDuration()) > 0;
            }),
            (Accordion.prototype.show = function (opt) {
                var $target, that, $targetContent;
                (that = this),
                    ($target = that.getTarget()),
                    ($targetContent = that.getTargetContent()),
                    that.isActive() ||
                        (that.isAnimated()
                            ? (that.triggerEvent("beforeShow.vc.accordion"),
                              $target
                                  .queue(function (next) {
                                      $targetContent.one(
                                          Accordion.transitionName,
                                          function () {
                                              $target.removeClass(
                                                  that.animatingClass
                                              ),
                                                  $targetContent.attr(
                                                      "style",
                                                      ""
                                                  ),
                                                  that.triggerEvent(
                                                      "afterShow.vc.accordion"
                                                  );
                                          }
                                      ),
                                          Accordion.emulateTransitionEnd(
                                              $targetContent,
                                              that.getAnimationDurationMilliseconds() +
                                                  100
                                          ),
                                          next();
                                  })
                                  .queue(function (next) {
                                      $targetContent.attr("style", ""),
                                          $targetContent.css({
                                              position: "absolute",
                                              visibility: "hidden",
                                              display: "block",
                                          });
                                      var height = $targetContent.height();
                                      $targetContent.data("vcHeight", height),
                                          $targetContent.attr("style", ""),
                                          next();
                                  })
                                  .queue(function (next) {
                                      $targetContent.height(0),
                                          $targetContent.css({
                                              "padding-top": 0,
                                              "padding-bottom": 0,
                                          }),
                                          next();
                                  })
                                  .queue(function (next) {
                                      $target.addClass(that.animatingClass),
                                          $target.addClass(that.activeClass),
                                          (("object" == typeof opt &&
                                              opt.hasOwnProperty(
                                                  "changeHash"
                                              ) &&
                                              opt.changeHash) ||
                                              "undefined" == typeof opt) &&
                                              that.changeLocationHash(),
                                          that.triggerEvent(
                                              "show.vc.accordion"
                                          ),
                                          next();
                                  })
                                  .queue(function (next) {
                                      var height =
                                          $targetContent.data("vcHeight");
                                      $targetContent.animate(
                                          { height: height },
                                          {
                                              duration:
                                                  that.getAnimationDurationMilliseconds(),
                                              complete: function () {
                                                  $targetContent.data(
                                                      "events"
                                                  ) ||
                                                      $targetContent.attr(
                                                          "style",
                                                          ""
                                                      );
                                              },
                                          }
                                      ),
                                          $targetContent.css({
                                              "padding-top": "",
                                              "padding-bottom": "",
                                          }),
                                          next();
                                  }))
                            : ($target.addClass(that.activeClass),
                              that.triggerEvent("show.vc.accordion")));
            }),
            (Accordion.prototype.hide = function (opt) {
                var $target, that, $targetContent;
                (that = this),
                    ($target = that.getTarget()),
                    ($targetContent = that.getTargetContent()),
                    that.isActive() &&
                        (that.isAnimated()
                            ? (that.triggerEvent("beforeHide.vc.accordion"),
                              $target
                                  .queue(function (next) {
                                      $targetContent.one(
                                          Accordion.transitionName,
                                          function () {
                                              $target.removeClass(
                                                  that.animatingClass
                                              ),
                                                  $targetContent.attr(
                                                      "style",
                                                      ""
                                                  ),
                                                  that.triggerEvent(
                                                      "afterHide.vc.accordion"
                                                  );
                                          }
                                      ),
                                          Accordion.emulateTransitionEnd(
                                              $targetContent,
                                              that.getAnimationDurationMilliseconds() +
                                                  100
                                          ),
                                          next();
                                  })
                                  .queue(function (next) {
                                      $target.addClass(that.animatingClass),
                                          $target.removeClass(that.activeClass),
                                          that.triggerEvent(
                                              "hide.vc.accordion"
                                          ),
                                          next();
                                  })
                                  .queue(function (next) {
                                      var height = $targetContent.height();
                                      $targetContent.height(height), next();
                                  })
                                  .queue(function (next) {
                                      $targetContent.animate(
                                          { height: 0 },
                                          that.getAnimationDurationMilliseconds()
                                      ),
                                          $targetContent.css({
                                              "padding-top": 0,
                                              "padding-bottom": 0,
                                          }),
                                          next();
                                  }))
                            : ($target.removeClass(that.activeClass),
                              that.triggerEvent("hide.vc.accordion")));
            }),
            (Accordion.prototype.toggle = function (opt) {
                var $this;
                ($this = this.$element),
                    this.isActive()
                        ? Plugin.call($this, "hide", opt)
                        : Plugin.call($this, "show", opt);
            }),
            (Accordion.prototype.dropdown = function (opt) {
                var $this;
                ($this = this.$element),
                    this.isActive()
                        ? Plugin.call($this, "hide", opt)
                        : (Plugin.call($this, "show", opt),
                          $(document).on(
                              "click.vc.accordion.data-api.dropdown",
                              function (e) {
                                  Plugin.call($this, "hide", opt),
                                      $(document).off(e);
                              }
                          ));
            }),
            (Accordion.prototype.collapse = function (opt) {
                var $this, $triggers;
                ($this = this.$element),
                    ($triggers = this.getActiveTriggers().filter(function () {
                        return $this[0] !== this;
                    })),
                    $triggers.length && Plugin.call($triggers, "hide", opt),
                    Plugin.call($this, "show", opt);
            }),
            (Accordion.prototype.collapseAll = function (opt) {
                var $this, $triggers;
                ($this = this.$element),
                    ($triggers = this.getActiveTriggers().filter(function () {
                        return $this[0] !== this;
                    })),
                    $triggers.length && Plugin.call($triggers, "hide", opt),
                    Plugin.call($this, "toggle", opt);
            }),
            (Accordion.prototype.showNext = function (opt) {
                var $triggers, $activeTriggers, activeIndex;
                if (
                    (($triggers = this.getTriggers()),
                    ($activeTriggers = this.getActiveTriggers()),
                    $triggers.length)
                ) {
                    if ($activeTriggers.length) {
                        var lastActiveAccordion;
                        (lastActiveAccordion = $activeTriggers
                            .eq($activeTriggers.length - 1)
                            .vcAccordion()
                            .data("vc.accordion")),
                            lastActiveAccordion &&
                                lastActiveAccordion.getIndex &&
                                (activeIndex = lastActiveAccordion.getIndex());
                    }
                    activeIndex > -1 && activeIndex + 1 < $triggers.length
                        ? Plugin.call(
                              $triggers.eq(activeIndex + 1),
                              "controller",
                              opt
                          )
                        : Plugin.call($triggers.eq(0), "controller", opt);
                }
            }),
            (Accordion.prototype.showPrev = function (opt) {
                var $triggers, $activeTriggers, activeIndex;
                if (
                    (($triggers = this.getTriggers()),
                    ($activeTriggers = this.getActiveTriggers()),
                    $triggers.length)
                ) {
                    if ($activeTriggers.length) {
                        var lastActiveAccordion;
                        (lastActiveAccordion = $activeTriggers
                            .eq($activeTriggers.length - 1)
                            .vcAccordion()
                            .data("vc.accordion")),
                            lastActiveAccordion &&
                                lastActiveAccordion.getIndex &&
                                (activeIndex = lastActiveAccordion.getIndex());
                    }
                    activeIndex > -1
                        ? activeIndex - 1 >= 0
                            ? Plugin.call(
                                  $triggers.eq(activeIndex - 1),
                                  "controller",
                                  opt
                              )
                            : Plugin.call(
                                  $triggers.eq($triggers.length - 1),
                                  "controller",
                                  opt
                              )
                        : Plugin.call($triggers.eq(0), "controller", opt);
                }
            }),
            (Accordion.prototype.showAt = function (index, opt) {
                var $triggers;
                ($triggers = this.getTriggers()),
                    $triggers.length &&
                        index &&
                        index < $triggers.length &&
                        Plugin.call($triggers.eq(index), "controller", opt);
            }),
            (Accordion.prototype.scrollToActive = function () {
                var that, $targetElement, offset, delay, speed;
                (that = this),
                    (offset = 1),
                    (delay = 300),
                    (speed = 300),
                    ($targetElement = $(this.getTarget())),
                    $targetElement.length &&
                        this.$element.length &&
                        setTimeout(function () {
                            var posY =
                                $targetElement.offset().top -
                                $(window).scrollTop() -
                                that.$element.outerHeight() * offset;
                            0 > posY &&
                                $("html, body").animate(
                                    {
                                        scrollTop:
                                            $targetElement.offset().top -
                                            that.$element.outerHeight() *
                                                offset,
                                    },
                                    speed
                                );
                        }, delay);
            }),
            (old = $.fn.vcAccordion),
            ($.fn.vcAccordion = Plugin),
            ($.fn.vcAccordion.Constructor = Accordion),
            ($.fn.vcAccordion.noConflict = function () {
                return ($.fn.vcAccordion = old), this;
            }),
            (clickHandler = function (e) {
                var $this;
                ($this = $(this)),
                    e.preventDefault(),
                    Plugin.call($this, "controller");
            }),
            (hashNavigation = function () {
                var hash, $targetElement, $accordion, offset, delay, speed;
                (offset = 0.2),
                    (delay = 300),
                    (speed = 0),
                    (hash = window.location.hash),
                    hash &&
                        (($targetElement = $(hash)),
                        $targetElement.length &&
                            (($accordion = $targetElement.find(
                                '[data-vc-accordion][href="' +
                                    hash +
                                    '"],[data-vc-accordion][data-vc-target="' +
                                    hash +
                                    '"]'
                            )),
                            $accordion.length &&
                                (setTimeout(function () {
                                    $("html, body").animate(
                                        {
                                            scrollTop:
                                                $targetElement.offset().top -
                                                $(window).height() * offset,
                                        },
                                        speed
                                    );
                                }, delay),
                                $accordion.trigger("click"))));
            }),
            window.addEventListener("hashchange", hashNavigation, !1),
            $(document).on(
                "click.vc.accordion.data-api",
                "[data-vc-accordion]",
                clickHandler
            ),
            $(document).ready(hashNavigation),
            $(document).on("afterShow.vc.accordion", function (e) {
                Plugin.call($(e.target), "scrollToActive");
            });
    })(window.jQuery);

+(function ($) {
    "use strict";
    function startAutoPlay() {
        $("[data-vc-tta-autoplay]").each(function () {
            $(this).vcTtaAutoPlay();
        });
    }
    var Plugin, TtaAutoPlay, old;
    (Plugin = function (action, options) {
        var args;
        return (
            (args = Array.prototype.slice.call(arguments, 1)),
            this.each(function () {
                var $this, data;
                ($this = $(this)),
                    (data = $this.data("vc.tta.autoplay")),
                    data ||
                        ((data = new TtaAutoPlay(
                            $this,
                            $.extend(
                                !0,
                                {},
                                TtaAutoPlay.DEFAULTS,
                                $this.data("vc-tta-autoplay"),
                                options
                            )
                        )),
                        $this.data("vc.tta.autoplay", data)),
                    "string" == typeof action
                        ? data[action].apply(data, args)
                        : data.start(args);
            })
        );
    }),
        (TtaAutoPlay = function ($element, options) {
            (this.$element = $element), (this.options = options);
        }),
        (TtaAutoPlay.DEFAULTS = {
            delay: 5e3,
            pauseOnHover: !0,
            stopOnClick: !0,
        }),
        (TtaAutoPlay.prototype.show = function () {
            this.$element
                .find("[data-vc-accordion]:eq(0)")
                .vcAccordion("showNext", { changeHash: !1 });
        }),
        (TtaAutoPlay.prototype.hasTimer = function () {
            return void 0 !== this.$element.data("vc.tta.autoplay.timer");
        }),
        (TtaAutoPlay.prototype.setTimer = function (windowInterval) {
            this.$element.data("vc.tta.autoplay.timer", windowInterval);
        }),
        (TtaAutoPlay.prototype.getTimer = function () {
            return this.$element.data("vc.tta.autoplay.timer");
        }),
        (TtaAutoPlay.prototype.deleteTimer = function () {
            this.$element.removeData("vc.tta.autoplay.timer");
        }),
        (TtaAutoPlay.prototype.start = function () {
            function stopHandler(e) {
                e.preventDefault && e.preventDefault(),
                    that.hasTimer() && Plugin.call($this, "stop");
            }
            function hoverHandler(e) {
                e.preventDefault && e.preventDefault(),
                    that.hasTimer() &&
                        Plugin.call(
                            $this,
                            "mouseleave" === e.type ? "resume" : "pause"
                        );
            }
            var $this, that;
            ($this = this.$element),
                (that = this),
                this.hasTimer() ||
                    (this.setTimer(
                        window.setInterval(
                            this.show.bind(this),
                            this.options.delay
                        )
                    ),
                    this.options.stopOnClick &&
                        $this.on(
                            "click.vc.tta.autoplay.data-api",
                            "[data-vc-accordion]",
                            stopHandler
                        ),
                    this.options.pauseOnHover && $this.hover(hoverHandler));
        }),
        (TtaAutoPlay.prototype.resume = function () {
            this.hasTimer() &&
                this.setTimer(
                    window.setInterval(this.show.bind(this), this.options.delay)
                );
        }),
        (TtaAutoPlay.prototype.stop = function () {
            this.pause(),
                this.deleteTimer(),
                this.$element.off(
                    "click.vc.tta.autoplay.data-api mouseenter mouseleave"
                );
        }),
        (TtaAutoPlay.prototype.pause = function () {
            var timer;
            (timer = this.getTimer()),
                void 0 !== timer && window.clearInterval(timer);
        }),
        (old = $.fn.vcTtaAutoPlay),
        ($.fn.vcTtaAutoPlay = Plugin),
        ($.fn.vcTtaAutoPlay.Constructor = TtaAutoPlay),
        ($.fn.vcTtaAutoPlay.noConflict = function () {
            return ($.fn.vcTtaAutoPlay = old), this;
        }),
        $(document).ready(startAutoPlay);
})(window.jQuery);

+(function ($) {
    "use strict";
    function Plugin(action, options) {
        var args;
        return (
            (args = Array.prototype.slice.call(arguments, 1)),
            this.each(function () {
                var $this, data;
                ($this = $(this)),
                    (data = $this.data("vc.tabs")),
                    data ||
                        ((data = new Tabs($this, $.extend(!0, {}, options))),
                        $this.data("vc.tabs", data)),
                    "string" == typeof action && data[action].apply(data, args);
            })
        );
    }
    var Tabs, old, clickHandler, changeHandler;
    (Tabs = function (element, options) {
        (this.$element = $(element)),
            (this.activeClass = "vc_active"),
            (this.tabSelector = "[data-vc-tab]"),
            (this.useCacheFlag = void 0),
            (this.$target = void 0),
            (this.selector = void 0),
            (this.$targetTab = void 0),
            (this.$relatedAccordion = void 0),
            (this.$container = void 0);
    }),
        (Tabs.prototype.isCacheUsed = function () {
            var useCache, that;
            return (
                (that = this),
                (useCache = function () {
                    return !1 !== that.$element.data("vcUseCache");
                }),
                "undefined" == typeof this.useCacheFlag &&
                    (this.useCacheFlag = useCache()),
                this.useCacheFlag
            );
        }),
        (Tabs.prototype.getContainer = function () {
            return this.isCacheUsed()
                ? ("undefined" == typeof this.$container &&
                      (this.$container = this.findContainer()),
                  this.$container)
                : this.findContainer();
        }),
        (Tabs.prototype.findContainer = function () {
            var $container;
            return (
                ($container = this.$element.closest(
                    this.$element.data("vcContainer")
                )),
                $container.length || ($container = $("body")),
                $container
            );
        }),
        (Tabs.prototype.getContainerAccordion = function () {
            return this.getContainer().find("[data-vc-accordion]");
        }),
        (Tabs.prototype.getSelector = function () {
            var findSelector, $this;
            return (
                ($this = this.$element),
                (findSelector = function () {
                    var selector;
                    return (
                        (selector = $this.data("vcTarget")),
                        selector || (selector = $this.attr("href")),
                        selector
                    );
                }),
                this.isCacheUsed()
                    ? ("undefined" == typeof this.selector &&
                          (this.selector = findSelector()),
                      this.selector)
                    : findSelector()
            );
        }),
        (Tabs.prototype.getTarget = function () {
            var selector;
            return (
                (selector = this.getSelector()),
                this.isCacheUsed()
                    ? ("undefined" == typeof this.$target &&
                          (this.$target = this.getContainer().find(selector)),
                      this.$target)
                    : this.getContainer().find(selector)
            );
        }),
        (Tabs.prototype.getRelatedAccordion = function () {
            var tab, filterElements;
            return (
                (tab = this),
                (filterElements = function () {
                    var $elements;
                    return (
                        ($elements = tab
                            .getContainerAccordion()
                            .filter(function () {
                                var $that, accordion;
                                return (
                                    ($that = $(this)),
                                    (accordion = $that.data("vc.accordion")),
                                    "undefined" == typeof accordion &&
                                        ($that.vcAccordion(),
                                        (accordion =
                                            $that.data("vc.accordion"))),
                                    tab.getSelector() ===
                                        accordion.getSelector()
                                );
                            })),
                        $elements.length ? $elements : void 0
                    );
                }),
                this.isCacheUsed()
                    ? ("undefined" == typeof this.$relatedAccordion &&
                          (this.$relatedAccordion = filterElements()),
                      this.$relatedAccordion)
                    : filterElements()
            );
        }),
        (Tabs.prototype.triggerEvent = function (event) {
            var $event;
            "string" == typeof event &&
                (($event = $.Event(event)), this.$element.trigger($event));
        }),
        (Tabs.prototype.getTargetTab = function () {
            var $this;
            return (
                ($this = this.$element),
                this.isCacheUsed()
                    ? ("undefined" == typeof this.$targetTab &&
                          (this.$targetTab = $this.closest(this.tabSelector)),
                      this.$targetTab)
                    : $this.closest(this.tabSelector)
            );
        }),
        (Tabs.prototype.tabClick = function () {
            this.getRelatedAccordion().trigger("click");
        }),
        (Tabs.prototype.show = function () {
            this.getTargetTab().hasClass(this.activeClass) ||
                (this.triggerEvent("show.vc.tab"),
                this.getTargetTab().addClass(this.activeClass));
        }),
        (Tabs.prototype.hide = function () {
            this.getTargetTab().hasClass(this.activeClass) &&
                (this.triggerEvent("hide.vc.tab"),
                this.getTargetTab().removeClass(this.activeClass));
        }),
        (old = $.fn.vcTabs),
        ($.fn.vcTabs = Plugin),
        ($.fn.vcTabs.Constructor = Tabs),
        ($.fn.vcTabs.noConflict = function () {
            return ($.fn.vcTabs = old), this;
        }),
        (clickHandler = function (e) {
            var $this;
            ($this = $(this)),
                e.preventDefault(),
                Plugin.call($this, "tabClick");
        }),
        (changeHandler = function (e) {
            var caller;
            (caller = $(e.target).data("vc.accordion")),
                "undefined" == typeof caller.getRelatedTab &&
                    (caller.getRelatedTab = function () {
                        var findTargets;
                        return (
                            (findTargets = function () {
                                var $targets;
                                return ($targets = caller
                                    .getContainer()
                                    .find("[data-vc-tabs]")
                                    .filter(function () {
                                        var $this, tab;
                                        return (
                                            ($this = $(this)),
                                            (tab = $this.data("vc.accordion")),
                                            "undefined" == typeof tab &&
                                                $this.vcAccordion(),
                                            (tab = $this.data("vc.accordion")),
                                            tab.getSelector() ===
                                                caller.getSelector()
                                        );
                                    }));
                            }),
                            caller.isCacheUsed()
                                ? ("undefined" == typeof caller.relatedTab &&
                                      (caller.relatedTab = findTargets()),
                                  caller.relatedTab)
                                : findTargets()
                        );
                    }),
                Plugin.call(caller.getRelatedTab(), e.type);
        }),
        $(document).on(
            "click.vc.tabs.data-api",
            "[data-vc-tabs]",
            clickHandler
        ),
        $(document).on("show.vc.accordion hide.vc.accordion", changeHandler);
})(window.jQuery);
