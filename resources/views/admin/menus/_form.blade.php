@php
    use App\Models\Category;
     $testMenu = Category::find(1);
 //    dd($testMenu->translation);
@endphp
@push('styles')
    <style type="text/css">

        a {
            color: #2996cc;
        }

        a:hover {
            text-decoration: none;
        }

        p {
            line-height: 1.5em;
        }

        .small {
            color: #666;
            font-size: 0.875em;
        }

        .large {
            font-size: 1.25em;
        }

        .dd {
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
            max-width: 600px;
            list-style: none;
            font-size: 13px;
            line-height: 20px;
        }

        .dd-list {
            display: block;
            position: relative;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .dd-list .dd-list {
            padding-left: 30px;
        }

        .dd-collapsed .dd-list {
            display: none;
        }

        .dd-item,
        .dd-empty,
        .dd-placeholder {
            display: block;
            position: relative;
            margin: 0;
            padding: 0;
            min-height: 20px;
            font-size: 13px;
            line-height: 20px;
        }

        .dd-handle {
            display: block;
            height: 30px;
            margin: 5px 0;
            padding: 5px 10px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border: 1px solid #ccc;
            background: #fafafa;
            background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
            background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
            background: linear-gradient(top, #fafafa 0%, #eee 100%);
            -webkit-border-radius: 3px;
            border-radius: 3px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .dd-handle:hover {
            color: #2ea8e5;
            background: #fff;
        }

        .dd-item > button {
            display: block;
            position: relative;
            cursor: pointer;
            float: left;
            width: 25px;
            height: 20px;
            margin: 5px 0;
            padding: 0;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
            border: 0;
            background: transparent;
            font-size: 12px;
            line-height: 1;
            text-align: center;
            font-weight: bold;
        }

        .dd-item > button:before {
            content: '+';
            display: block;
            position: absolute;
            width: 100%;
            text-align: center;
            text-indent: 0;
        }

        .dd-item > button[data-action="collapse"]:before {
            content: '-';
        }

        .dd-placeholder,
        .dd-empty {
            margin: 5px 0;
            padding: 0;
            min-height: 30px;
            background: #f2fbff;
            border: 1px dashed #b6bcbf;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .dd-empty {
            border: 1px dashed #bbb;
            min-height: 100px;
            background-color: #e5e5e5;
            background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
            background-image: -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
            background-image: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
            background-size: 60px 60px;
            background-position: 0 0, 30px 30px;
        }

        .dd-dragel {
            position: absolute;
            pointer-events: none;
            z-index: 9999;
        }

        .dd-dragel > .dd-item .dd-handle {
            margin-top: 0;
        }

        .dd-dragel .dd-handle {
            -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
            box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
        }


        .nestable-lists {
            display: block;
            clear: both;
            padding: 0;
            width: 100%;
            border: 0;
        }

        .remove-menu {
            position: absolute;
            top: -10px;
            right: -11px;
            width: 20px;
            height: 20px;
            text-align: center;
            background: red;
            border-radius: 50%;
        }

        .remove-menu i {
            color: white;
        }

        #nestable-menu {
            padding: 0;
            margin: 20px 0;
        }

        #nestable-output {
            width: 100%;
            height: 7em;
            font-size: 0.75em;
            line-height: 1.333333em;
            font-family: Consolas, monospace;
            padding: 5px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }


        @media only screen and (min-width: 700px) {

            .dd {
                float: left;
                width: 100%;
            }

            .dd + .dd {
                margin-left: 2%;
            }

        }

        .dd-hover > .dd-handle {
            background: #2ea8e5 !important;
        }

        /**
        * Nestable Draggable Handles
        */

        .dd3-content {
            display: block;
            height: 30px;
            margin: 5px 0;
            padding: 5px 10px 5px 40px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border: 1px solid #ccc;
            background: #fafafa;
            background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
            background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
            background: linear-gradient(top, #fafafa 0%, #eee 100%);
            -webkit-border-radius: 3px;
            border-radius: 3px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .dd3-content:hover {
            color: #2ea8e5;
            background: #fff;
        }

        .dd-dragel > .dd3-item > .dd3-content {
            margin: 0;
        }

        .dd3-item > button {
            margin-left: 30px;
        }

        .dd3-handle {
            position: absolute;
            margin: 0;
            left: 0;
            top: 0;
            cursor: pointer;
            width: 30px;
            text-indent: 100%;
            white-space: nowrap;
            overflow: hidden;
            border: 1px solid #aaa;
            background: #ddd;
            background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
            background: -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
            background: linear-gradient(top, #ddd 0%, #bbb 100%);
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .dd3-handle:before {
            content: '≡';
            display: block;
            position: absolute;
            left: 0;
            top: 3px;
            width: 100%;
            text-align: center;
            text-indent: 0;
            color: #fff;
            font-size: 20px;
            font-weight: normal;
        }

        .dd3-handle:hover {
            background: #ddd;
        }

        /**
        * Socialite
        */

        .socialite {
            display: block;
            float: left;
            height: 35px;
        }
    </style> <!-- Thêm dấu đóng '>' ở đây -->
@endpush
@push('scripts')

    <script>
        $(document).ready(function () {
            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };
            // activate Nestable for list 1
            $('#nestable').nestable({
                group: 1,
                maxDepth: 2
            })
                .on('change', updateOutput);
            // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));

            $('#nestable-menu').on('click', function (e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            $('#nestable3').nestable();

        });
    </script>
    <script>
        /*!
     * Nestable jQuery Plugin - Copyright (c) 2012 David Bushell - http://dbushell.com/
     * Dual-licensed under the BSD or MIT licenses
     */
        ;(function ($, window, document, undefined) {
            var hasTouch = 'ontouchstart' in document;

            /**
             * Detect CSS pointer-events property
             * events are normally disabled on the dragging element to avoid conflicts
             * https://github.com/ausi/Feature-detection-technique-for-pointer-events/blob/master/modernizr-pointerevents.js
             */
            var hasPointerEvents = (function () {
                var el = document.createElement('div'),
                    docEl = document.documentElement;
                if (!('pointerEvents' in el.style)) {
                    return false;
                }
                el.style.pointerEvents = 'auto';
                el.style.pointerEvents = 'x';
                docEl.appendChild(el);
                var supports = window.getComputedStyle && window.getComputedStyle(el, '').pointerEvents === 'auto';
                docEl.removeChild(el);
                return !!supports;
            })();

            var defaults = {
                listNodeName: 'ol',
                itemNodeName: 'li',
                rootClass: 'dd',
                listClass: 'dd-list',
                itemClass: 'dd-item',
                dragClass: 'dd-dragel',
                handleClass: 'dd-handle',
                collapsedClass: 'dd-collapsed',
                placeClass: 'dd-placeholder',
                noDragClass: 'dd-nodrag',
                emptyClass: 'dd-empty',
                expandBtnHTML: '<button data-action="expand" type="button">Expand</button>',
                collapseBtnHTML: '<button data-action="collapse" type="button">Collapse</button>',
                group: 0,
                maxDepth: 5,
                threshold: 20
            };

            function Plugin(element, options) {
                this.w = $(document);
                this.el = $(element);
                this.options = $.extend({}, defaults, options);
                this.init();
            }

            Plugin.prototype = {

                init: function () {
                    var list = this;

                    list.reset();

                    list.el.data('nestable-group', this.options.group);

                    list.placeEl = $('<div class="' + list.options.placeClass + '"/>');

                    $.each(this.el.find(list.options.itemNodeName), function (k, el) {
                        list.setParent($(el));
                    });

                    list.el.on('click', 'button', function (e) {
                        if (list.dragEl) {
                            return;
                        }
                        var target = $(e.currentTarget),
                            action = target.data('action'),
                            item = target.parent(list.options.itemNodeName);
                        if (action === 'collapse') {
                            list.collapseItem(item);
                        }
                        if (action === 'expand') {
                            list.expandItem(item);
                        }
                    });

                    var onStartEvent = function (e) {
                        var handle = $(e.target);
                        if (!handle.hasClass(list.options.handleClass)) {
                            if (handle.closest('.' + list.options.noDragClass).length) {
                                return;
                            }
                            handle = handle.closest('.' + list.options.handleClass);
                        }

                        if (!handle.length || list.dragEl) {
                            return;
                        }

                        list.isTouch = /^touch/.test(e.type);
                        if (list.isTouch && e.touches.length !== 1) {
                            return;
                        }

                        e.preventDefault();
                        list.dragStart(e.touches ? e.touches[0] : e);
                    };

                    var onMoveEvent = function (e) {
                        if (list.dragEl) {
                            e.preventDefault();
                            list.dragMove(e.touches ? e.touches[0] : e);
                        }
                    };

                    var onEndEvent = function (e) {
                        if (list.dragEl) {
                            e.preventDefault();
                            list.dragStop(e.touches ? e.touches[0] : e);
                        }
                    };

                    if (hasTouch) {
                        list.el[0].addEventListener('touchstart', onStartEvent, false);
                        window.addEventListener('touchmove', onMoveEvent, false);
                        window.addEventListener('touchend', onEndEvent, false);
                        window.addEventListener('touchcancel', onEndEvent, false);
                    }

                    list.el.on('mousedown', onStartEvent);
                    list.w.on('mousemove', onMoveEvent);
                    list.w.on('mouseup', onEndEvent);

                },

                serialize: function () {
                    var data,
                        depth = 0,
                        list = this;
                    step = function (level, depth) {
                        var array = [],
                            items = level.children(list.options.itemNodeName);
                        items.each(function () {
                            var li = $(this),
                                item = $.extend({}, li.data()),
                                sub = li.children(list.options.listNodeName);
                            if (sub.length) {
                                item.children = step(sub, depth + 1);
                            }
                            array.push(item);
                        });
                        return array;
                    };
                    data = step(list.el.find(list.options.listNodeName).first(), depth);
                    return data;
                },

                serialise: function () {
                    return this.serialize();
                },

                reset: function () {
                    this.mouse = {
                        offsetX: 0,
                        offsetY: 0,
                        startX: 0,
                        startY: 0,
                        lastX: 0,
                        lastY: 0,
                        nowX: 0,
                        nowY: 0,
                        distX: 0,
                        distY: 0,
                        dirAx: 0,
                        dirX: 0,
                        dirY: 0,
                        lastDirX: 0,
                        lastDirY: 0,
                        distAxX: 0,
                        distAxY: 0
                    };
                    this.isTouch = false;
                    this.moving = false;
                    this.dragEl = null;
                    this.dragRootEl = null;
                    this.dragDepth = 0;
                    this.hasNewRoot = false;
                    this.pointEl = null;
                },

                expandItem: function (li) {
                    li.removeClass(this.options.collapsedClass);
                    li.children('[data-action="expand"]').hide();
                    li.children('[data-action="collapse"]').show();
                    li.children(this.options.listNodeName).show();
                },

                collapseItem: function (li) {
                    var lists = li.children(this.options.listNodeName);
                    if (lists.length) {
                        li.addClass(this.options.collapsedClass);
                        li.children('[data-action="collapse"]').hide();
                        li.children('[data-action="expand"]').show();
                        li.children(this.options.listNodeName).hide();
                    }
                },

                expandAll: function () {
                    var list = this;
                    list.el.find(list.options.itemNodeName).each(function () {
                        list.expandItem($(this));
                    });
                },

                collapseAll: function () {
                    var list = this;
                    list.el.find(list.options.itemNodeName).each(function () {
                        list.collapseItem($(this));
                    });
                },

                setParent: function (li) {
                    if (li.children(this.options.listNodeName).length) {
                        li.prepend($(this.options.expandBtnHTML));
                        li.prepend($(this.options.collapseBtnHTML));
                    }
                    li.children('[data-action="expand"]').hide();
                },

                unsetParent: function (li) {
                    li.removeClass(this.options.collapsedClass);
                    li.children('[data-action]').remove();
                    li.children(this.options.listNodeName).remove();
                },

                dragStart: function (e) {
                    var mouse = this.mouse,
                        target = $(e.target),
                        dragItem = target.closest(this.options.itemNodeName);

                    this.placeEl.css('height', dragItem.height());

                    mouse.offsetX = e.offsetX !== undefined ? e.offsetX : e.pageX - target.offset().left;
                    mouse.offsetY = e.offsetY !== undefined ? e.offsetY : e.pageY - target.offset().top;
                    mouse.startX = mouse.lastX = e.pageX;
                    mouse.startY = mouse.lastY = e.pageY;

                    this.dragRootEl = this.el;

                    this.dragEl = $(document.createElement(this.options.listNodeName)).addClass(this.options.listClass + ' ' + this.options.dragClass);
                    this.dragEl.css('width', dragItem.width());

                    dragItem.after(this.placeEl);
                    dragItem[0].parentNode.removeChild(dragItem[0]);
                    dragItem.appendTo(this.dragEl);

                    $(document.body).append(this.dragEl);
                    this.dragEl.css({
                        'left': e.pageX - mouse.offsetX,
                        'top': e.pageY - mouse.offsetY
                    });
                    // total depth of dragging item
                    var i, depth,
                        items = this.dragEl.find(this.options.itemNodeName);
                    for (i = 0; i < items.length; i++) {
                        depth = $(items[i]).parents(this.options.listNodeName).length;
                        if (depth > this.dragDepth) {
                            this.dragDepth = depth;
                        }
                    }
                },

                dragStop: function (e) {
                    var el = this.dragEl.children(this.options.itemNodeName).first();
                    el[0].parentNode.removeChild(el[0]);
                    this.placeEl.replaceWith(el);

                    this.dragEl.remove();
                    this.el.trigger('change');
                    if (this.hasNewRoot) {
                        this.dragRootEl.trigger('change');
                    }
                    this.reset();
                },

                dragMove: function (e) {
                    var list, parent, prev, next, depth,
                        opt = this.options,
                        mouse = this.mouse;

                    this.dragEl.css({
                        'left': e.pageX - mouse.offsetX,
                        'top': e.pageY - mouse.offsetY
                    });

                    // mouse position last events
                    mouse.lastX = mouse.nowX;
                    mouse.lastY = mouse.nowY;
                    // mouse position this events
                    mouse.nowX = e.pageX;
                    mouse.nowY = e.pageY;
                    // distance mouse moved between events
                    mouse.distX = mouse.nowX - mouse.lastX;
                    mouse.distY = mouse.nowY - mouse.lastY;
                    // direction mouse was moving
                    mouse.lastDirX = mouse.dirX;
                    mouse.lastDirY = mouse.dirY;
                    // direction mouse is now moving (on both axis)
                    var newAx = Math.abs(mouse.distX) > Math.abs(mouse.distY) ? 1 : 0;

                    // do nothing on first move
                    if (!mouse.moving) {
                        mouse.dirAx = newAx;
                        mouse.moving = true;
                        return;
                    }

                    // calc distance moved on this axis (and direction)
                    if (mouse.dirAx !== newAx) {
                        mouse.distAxX = 0;
                        mouse.distAxY = 0;
                    } else {
                        mouse.distAxX += Math.abs(mouse.distX);
                        if (mouse.dirX !== 0 && mouse.dirX !== mouse.lastDirX) {
                            mouse.distAxX = 0;
                        }
                        mouse.distAxY += Math.abs(mouse.distY);
                        if (mouse.dirY !== 0 && mouse.dirY !== mouse.lastDirY) {
                            mouse.distAxY = 0;
                        }
                    }
                    mouse.dirAx = newAx;

                    /**
                     * move horizontal
                     */
                    if (mouse.dirAx && mouse.distAxX >= opt.threshold) {
                        // reset move distance on x-axis for new phase
                        mouse.distAxX = 0;
                        prev = this.placeEl.prev(opt.itemNodeName);
                        // increase horizontal level if previous sibling exists and is not collapsed
                        if (mouse.distX > 0 && prev.length && !prev.hasClass(opt.collapsedClass)) {
                            // cannot increase level when item above is collapsed
                            list = prev.find(opt.listNodeName).last();
                            // check if depth limit has reached
                            depth = this.placeEl.parents(opt.listNodeName).length;
                            if (depth + this.dragDepth <= opt.maxDepth) {
                                // create new sub-level if one doesn't exist
                                if (!list.length) {
                                    list = $('<' + opt.listNodeName + '/>').addClass(opt.listClass);
                                    list.append(this.placeEl);
                                    prev.append(list);
                                    this.setParent(prev);
                                } else {
                                    // else append to next level up
                                    list = prev.children(opt.listNodeName).last();
                                    list.append(this.placeEl);
                                }
                            }
                        }
                        // decrease horizontal level
                        if (mouse.distX < 0) {
                            // we can't decrease a level if an item preceeds the current one
                            next = this.placeEl.next(opt.itemNodeName);
                            if (!next.length) {
                                parent = this.placeEl.parent();
                                this.placeEl.closest(opt.itemNodeName).after(this.placeEl);
                                if (!parent.children().length) {
                                    this.unsetParent(parent.parent());
                                }
                            }
                        }
                    }

                    var isEmpty = false;

                    // find list item under cursor
                    if (!hasPointerEvents) {
                        this.dragEl[0].style.visibility = 'hidden';
                    }
                    this.pointEl = $(document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
                    if (!hasPointerEvents) {
                        this.dragEl[0].style.visibility = 'visible';
                    }
                    if (this.pointEl.hasClass(opt.handleClass)) {
                        this.pointEl = this.pointEl.parent(opt.itemNodeName);
                    }
                    if (this.pointEl.hasClass(opt.emptyClass)) {
                        isEmpty = true;
                    } else if (!this.pointEl.length || !this.pointEl.hasClass(opt.itemClass)) {
                        return;
                    }

                    // find parent list of item under cursor
                    var pointElRoot = this.pointEl.closest('.' + opt.rootClass),
                        isNewRoot = this.dragRootEl.data('nestable-id') !== pointElRoot.data('nestable-id');

                    /**
                     * move vertical
                     */
                    if (!mouse.dirAx || isNewRoot || isEmpty) {
                        // check if groups match if dragging over new root
                        if (isNewRoot && opt.group !== pointElRoot.data('nestable-group')) {
                            return;
                        }
                        // check depth limit
                        depth = this.dragDepth - 1 + this.pointEl.parents(opt.listNodeName).length;
                        if (depth > opt.maxDepth) {
                            return;
                        }
                        var before = e.pageY < (this.pointEl.offset().top + this.pointEl.height() / 2);
                        parent = this.placeEl.parent();
                        // if empty create new list to replace empty placeholder
                        if (isEmpty) {
                            list = $(document.createElement(opt.listNodeName)).addClass(opt.listClass);
                            list.append(this.placeEl);
                            this.pointEl.replaceWith(list);
                        } else if (before) {
                            this.pointEl.before(this.placeEl);
                        } else {
                            this.pointEl.after(this.placeEl);
                        }
                        if (!parent.children().length) {
                            this.unsetParent(parent.parent());
                        }
                        if (!this.dragRootEl.find(opt.itemNodeName).length) {
                            this.dragRootEl.append('<div class="' + opt.emptyClass + '"/>');
                        }
                        // parent root list has changed
                        if (isNewRoot) {
                            this.dragRootEl = pointElRoot;
                            this.hasNewRoot = this.el[0] !== this.dragRootEl[0];
                        }
                    }
                }

            };

            $.fn.nestable = function (params) {
                var lists = this,
                    retval = this;

                lists.each(function () {
                    var plugin = $(this).data("nestable");

                    if (!plugin) {
                        $(this).data("nestable", new Plugin(this, params));
                        $(this).data("nestable-id", new Date().getTime());
                    } else {
                        if (typeof params === 'string' && typeof plugin[params] === 'function') {
                            retval = plugin[params]();
                        }
                    }
                });

                return retval || lists;
            };

        })(window.jQuery || window.Zepto, window, document);
    </script>
@endpush
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Thông tin chung</h4>
                <div class="row">
                    <input type="hidden" name="list_id_cate_checked" class="list_id_cate_checked" value="">
                    <div class="col-lg-5">
                        <div class="col-form-label">
                            <div class="card">
                                <div class="card-body">
                                    @foreach($categories as $cate)
                                        @if ($cate['status'] == 'activated')
                                            <div class="box-check-cate">
                                                <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                        <input type="checkbox"
                                                               {{in_array($cate['id'], $list_categories) ? 'checked="checked" disabled' : ''}}
                                                               class="form-check-input cate-{{$cate['id']}}"
                                                               data-name="{{$cate->translation?->name}}"
                                                               data-id="{{$cate['id']}}"
                                                               value="{{$cate['id']}}">
                                                        @php
                                                            $str = '';
                                                            for($i = 0; $i< $cate->level; $i++){
                                                                echo $str;
                                                                $str.='-- ';
                                                            }
                                                        @endphp
                                                        {{$cate->name}}
                                                        <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="col-form-label">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div>
                                            <button type="button" class="btn btn-primary" id="save_value">
                                                <i class="fa fa-arrow-right mr-0" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="col-form-label">
                            <div class="card">
                                <div class="card-body">
                                    <div class="cf nestable-lists">
                                        <div class="dd" id="nestable">
                                            <ol class="dd-list">
                                                @php $stt = 0; @endphp
                                                @if($menuSetup && is_array($menuSetup))
                                                @foreach($menuSetup as $set)
                                                    <li class="dd-item" data-id="{{$set['id']}}">
                                                        <div
                                                            class="dd-handle">{{Category::find($set['id'])?->name}}</div>
                                                        <div class="remove-menu" title="Xóa menu"
                                                             data-id="{{$set['id']}}">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </div>
                                                        @if(isset($set['children']) && !empty($set['children']))
                                                            <ol class="dd-list">
                                                                @foreach($set['children'] as $set_child)
                                                                    <li class="dd-item" data-id="{{$set_child['id']}}">
                                                                        <div
                                                                            class="dd-handle">{{Category::find($set_child['id'])?->name}}</div>
                                                                        <div class="remove-menu" title="Xóa menu"
                                                                             data-id="{{$set_child['id']}}"><i
                                                                                class="fa fa-times"
                                                                                aria-hidden="true"></i></div>
                                                                    </li>
                                                                @endforeach
                                                            </ol>
                                                        @endif
                                                    </li>
                                                @endforeach
                                                    @endif
                                            </ol>
                                            {{--                                            <input type="hidden" value="{{$menu['stt']}}" name="stt" class="stt">--}}
                                            <textarea
                                                style="display: none"
                                                id="nestable-output"
                                                name="content"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('key') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Mã <span class="text-danger">*</span></label>
                            <input {{$data['id']? 'disabled' : ''}} type="text" name="key"
                                   class="form-control {{$errors->has('key') ? 'form-control-danger' : ''}}"
                                   placeholder="Mã menu"
                                   value="{{old('key', $data['key'])}}"
                            >
                            @if ($errors->has('key'))
                                <div class="col-form-label">
                                    {{$errors->first('key')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group {{$errors->has('name') ? 'has-danger' : ''}}">
                            <label class="col-form-label">Tên <span class="text-danger">*</span></label>
                            <input type="text" name="name"
                                   class="form-control {{$errors->has('name') ? 'form-control-danger' : ''}}"
                                   placeholder="Tên menu"
                                   value="{{old('name', $data['name'])}}"
                            >
                            @if ($errors->has('name'))
                                <div class="col-form-label">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Chức năng</h4>
                <div class="row">
                    <div class="col-lg-12 button-page text-center">
                        <button class="btn btn-success mb-0"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu
                        </button>
                        <a href="{{route($route.'.index')}}" class="btn btn-danger mb-0"><i class="fa fa-arrow-left"
                                                                                            aria-hidden="true"></i>
                            Thoát
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="sub-title">Cài đặt</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <div class="col-lg-12 mb-2">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox" name="status" value="1"
                                            {{ old('status', $data['status'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
                                        <span class="cr">
                                                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                            </span>
                                        <span>Trạng thái</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkbox-fade fade-in-primary">
                                    <label>
                                        <input type="checkbox" id="checkbox" name="is_outstanding" value="1"
                                            {{ old('is_outstanding', $data['is_outstanding'] == \App\Enums\CommonEnum::ACTIVATED)  ? 'checked' : '' }}>
                                        <span class="cr">
                                                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                            </span>
                                        <span>Nổi bật</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@push('scripts')
    <script>
        $(function () {
            $('#save_value').click(function () {
                console.log('Save value');
                console.log($('#nestable-output').val());
                var arrMenus = JSON.parse($('#nestable-output').val());
                var txt = '';

                var list_id_cate = $('.list_id_cate_checked').val();


                // // kiểm tra các cate nào đã được chọn
                // var array_id_cate;
                // // Kiểm tra nếu chuỗi không rỗng
                // if (list_id_cate) {
                //     array_id_cate = list_id_cate.split(',')
                //         .map(function(item) {
                //             return item.trim();
                //         })
                //         .filter(function(item) {
                //             return item !== '';
                //         })
                //         .map(function(item) {
                //             return parseInt(item, 10);
                //         })
                //         .filter(function(item) {
                //             return !isNaN(item);
                //         });
                // } else {
                //     // Nếu chuỗi rỗng, khởi tạo mảng rỗng
                //     array_id_cate = [];
                // }
                // console.log('test',array_id_cate)

                $(':checkbox.form-check-input:checked').each(function (i) {
                    let object = {};
                    let id = $(this).data("id");
                    object['id'] = id;

                    // // da chon thi tiep tuc
                    // if (array_id_cate.includes(id)) {
                    //     return;
                    // }

                    // lấy name
                    let name = $(this).closest('label').contents().filter(function () {
                        return this.nodeType === 3; // Lấy chỉ nội dung văn bản
                    }).text().trim();
                    // Loại bỏ các ký tự '-- ' ở đầu tên
                    name = name.replace(/^\s*--\s*/, ''); // Bỏ qua ký tự '-- ' ở đầu

                    console.log($('.cate-' + id).attr('disabled'))
                    if ($('.cate-' + id).attr('disabled') === undefined) {
                        $('.cate-' + id).prop('disabled', true);
                        let txt_ = `
                        <li class="dd-item"  data-id="${id}">
                                <div class="dd-handle">${name}</div>
                                <div class="remove-menu" data-id="${id}" title="Xóa menu"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </li>
                        `;
                        txt = txt + txt_;
                        list_id_cate = list_id_cate + id + ',';
                        arrMenus.push(object)
                    }
                });
                $('.dd-list').first().append(txt);
                $('.list_id_cate_checked').val(list_id_cate);
                $('#nestable-output').val(JSON.stringify(arrMenus));
            });
            $(document).on('click', '.remove-menu', function (e) {
                console.log('Xóa phần tử');
                let r = confirm('Bạn có muốn xóa không')
                if (r) {
                    let id_cate_un_check = [];

                    var $this = $(this);
                    var id = $this.data('id');
                    var $parent = $this.parent('.dd-item');
                    $parent.remove();
                    var arrMenus = JSON.parse($('#nestable-output').val());

                    // luwu cacs id phai xoa
                    var arrTest = arrMenus;
                    id_cate_un_check.push(id)
                    var arrTest1 = arrTest.filter(item => item.id === id);
                    arrTest1.forEach(item => {
                        if (item.children && item.children.length > 0) {
                            item.children.forEach(itemChild => {
                                id_cate_un_check.push(itemChild.id)
                            })
                        }
                    });
                    console.log('arrTest', arrTest)

                    console.log(arrMenus)
                    arrMenus = arrMenus.filter(item => item.id !== id);
                    // Xóa phần tử có id trong children
                    arrMenus.forEach(item => {
                        if (item.children && item.children.length > 0) {
                            item.children = item.children.filter(child => child.id !== id);
                            // Nếu children rỗng, xóa key children
                            if (item.children.length === 0) {
                                delete item.children;
                            }
                        }
                    });
                    console.log(arrMenus)
                    $('#nestable-output').val(JSON.stringify(arrMenus));

                    if (Number.isInteger(id)) {
                        let list_cate_id = $('.list_id_cate_checked').val();
                        console.log('test', list_cate_id);
                        const arrNew = list_cate_id.split(",");
                        arrNew.forEach((value, ind) => {
                            if (value && Number(value) == id) {
                                arrNew.splice(ind, 1)
                            }
                        });
                        let list_id = '';
                        arrNew.forEach((value, ind) => {
                            if (value) {
                                list_id = list_id + value + ',';
                            }
                        });
                        $('.list_id_cate_checked').val(list_id);
                        $('.cate-' + id).removeAttr("disabled")
                        $('.cate-' + id).prop("checked", false);
                        id_cate_un_check.forEach(item => {
                            $('.cate-' + item).removeAttr("disabled")
                            $('.cate-' + item).prop("checked", false);
                        })
                    }

                    // let list_id = '';
                    // let un_check_list =[];
                    // if( arrMenus.length>0){
                    //     // mảng đã chọn
                    //     arrMenus.forEach(item => {
                    //         // giá trị đã chọn
                    //         list_id = item.id +',';
                    //         if (item.children && item.children.length > 0) {
                    //             item.children.forEach(itemChild => {
                    //                 list_id = itemChild.id +',';
                    //             });
                    //         }
                    //     });
                    // }else{
                    //
                    // }
                    //
                    // $('.list_id_cate_checked').val(list_id);

                }
            });
        });

    </script>
@endpush

