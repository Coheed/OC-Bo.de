/* Chosen by Patrick Filler, Jules Janssen, Jonnathan Soares, MIT-style license */
Elements.implement({chosen: function (e, t) {
    return this.each(function (n) {
        if (!n.hasClass("chzn-done"))return new Chosen(n, e, t)
    })
}});
var Chosen = new Class({active_field: !1, mouse_on_container: !1, results_showing: !1, result_highlighted: null, result_single_selected: null, choices: 0, initialize: function (e) {
    this.click_test_action = this.test_active_click.bind(this), this.form_field = e, this.is_multiple = this.form_field.multiple, this.is_rtl = this.form_field.hasClass("chzn-rtl"), this.set_up_html(), this.register_observers()
}, set_up_html: function () {
    var e, t, n, r;
    this.form_field.id || (this.form_field.id = String.uniqueID()), this.container_id = this.form_field.id.replace(/(:|\.)/g, "_") + "_chzn", this.default_text = this.form_field.get("data-placeholder") ? this.form_field.get("data-placeholder") : Locale.get("Chosen.placeholder", this.form_field.multiple), this.container = (new Element("div", {id: this.container_id, "class": "chzn-container" + (this.is_rtl ? " chzn-rtl" : "") + " chzn-container-" + (this.is_multiple ? "multi" : "single")})).addClass(this.form_field.get("class")).setStyles({padding: "0", border: "none"}), (r = this.form_field.get("style")) && r.test("(^width|[^-]width)") && this.container.setStyle("width", this.form_field.getStyle("width")), this.is_multiple ? this.container.set("html", '<ul class="chzn-choices"><li class="search-field"><input type="text" value="' + this.default_text + '" class="default" autocomplete="off" style="width:25px;" /></li></ul><div class="chzn-drop" style="left:-9000px;"><ul class="chzn-results"></ul></div>') : this.container.set("html", '<a href="javascript:void(0)" class="chzn-single"><span>' + this.default_text + '</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input type="text" autocomplete="off" /></div><ul class="chzn-results"></ul></div>'), this.form_field.setStyle("display", "none").grab(this.container, "after"), this.dropdown = this.container.getElement("div.chzn-drop"), this.dropdown.setStyles({top: "10", width: "100%"}), this.search_field = this.container.getElement("input"), this.search_results = this.container.getElement("ul.chzn-results"), this.search_no_results = this.container.getElement("li.no-results"), this.is_multiple ? (this.search_choices = this.container.getElement("ul.chzn-choices"), this.search_container = this.container.getElement("li.search-field")) : (this.search_container = this.container.getElement("div.chzn-search"), this.selected_item = this.container.getElement(".chzn-single"), this.search_field.setStyle("width", "100%")), this.results_build(), this.set_tab_index()
}, register_observers: function () {
    this.container.addEvents({click: this.container_click.bind(this), mouseenter: this.mouse_enter.bind(this), mouseleave: this.mouse_leave.bind(this)}), this.search_results.addEvents({click: this.search_results_click.bind(this), mouseover: this.search_results_mouseover.bind(this), mouseout: this.search_results_mouseout.bind(this)}), this.form_field.addEvent("liszt:updated", this.results_update_field.bind(this)), this.search_field.addEvents({blur: this.input_blur.bind(this), keyup: this.keyup_checker.bind(this), keydown: this.keydown_checker.bind(this)}), this.is_multiple ? (this.search_choices.addEvent("click", this.choices_click.bind(this)), this.search_field.addEvent("focus", this.input_focus.bind(this))) : this.selected_item.addEvent("focus", this.activate_field.bind(this))
}, container_click: function (e) {
    e && e.type === "click" && e.stopPropagation(), this.pending_destroy_click ? this.pending_destroy_click = !1 : (this.active_field ? !this.is_multiple && e && (e.target === this.selected_item || e.target.getParents("a.chzn-single").length) && (e.preventDefault(), this.results_toggle()) : (this.is_multiple && (this.search_field.value = ""), document.addEvent("click", this.click_test_action), this.results_show()), this.activate_field())
}, mouse_enter: function () {
    this.mouse_on_container = !0
}, mouse_leave: function () {
    this.mouse_on_container = !1
}, input_focus: function (e) {
    this.active_field || setTimeout(this.container_click.bind(this), 50)
}, input_blur: function (e) {
    this.mouse_on_container || (this.active_field = !1, setTimeout(this.blur_test.bind(this), 100))
}, blur_test: function (e) {
    !this.active_field && this.container.hasClass("chzn-container-active") && this.close_field()
}, close_field: function () {
    document.removeEvent("click", this.click_test_action), this.is_multiple || (this.selected_item.set("tabindex", this.search_field.get("tabindex")), this.search_field.set("tabindex", -1)), this.active_field = !1, this.results_hide(), this.container.removeClass("chzn-container-active"), this.winnow_results_clear(), this.clear_backstroke(), this.show_search_field_default(), this.search_field_scale()
}, activate_field: function () {
    !this.is_multiple && !this.active_field && (this.search_field.set("tabindex", this.selected_item.get("tabindex")), this.selected_item.set("tabindex", -1)), this.container.addClass("chzn-container-active"), this.active_field = !0, this.search_field.set("value", this.search_field.get("value")), this.search_field.focus()
}, test_active_click: function (e) {
    e.target.getParents("#" + this.container_id).length ? this.active_field = !0 : this.close_field()
}, results_build: function () {
    this.parsing = !0, this.results_data = this.form_field.select_to_array(), this.is_multiple && this.choices > 0 ? (this.search_choices.getElements("li.search-choice").destroy(), this.choices = 0) : this.is_multiple || this.selected_item.getElements("span").set("text", this.default_text);
    var e = "";
    this.results_data.each(function (t) {
        t.group ? e += this.result_add_group(t) : t.empty || (e += this.result_add_option(t), t.selected && this.is_multiple ? this.choice_build(t) : t.selected && !this.is_multiple && (this.selected_item.getElements("span").set("text", t.text), this.selected_item.getElements("span").set("html", t.html)))
    }, this), this.show_search_field_default(), this.search_field_scale(), this.search_results.set("html", e), this.parsing = !1
}, result_add_group: function (e) {
    return e.disabled ? "" : (e.dom_id = this.container_id + "_g_" + e.array_index, '<li id="' + e.dom_id + '" class="group-result"><div>' + e.label + "</div></li>")
}, result_add_option: function (e) {
    var t;
    return e.disabled ? "" : (e.dom_id = this.container_id + "_o_" + e.array_index, t = e.selected && this.is_multiple ? [] : ["active-result"], e.selected && t.push("result-selected"), e.group_array_index != null && t.push("group-option"), '<li id="' + e.dom_id + '" class="' + t.join(" ") + '"><div>' + e.html + "</div></li>")
}, results_update_field: function () {
    this.result_clear_highlight(), this.result_single_selected = null, this.results_build()
}, result_do_highlight: function (e) {
    var t, n, r, i, s;
    e && (this.result_clear_highlight(), this.result_highlight = e, this.result_highlight.addClass("highlighted"), r = parseInt(this.search_results.getStyle("maxHeight"), 10), s = this.search_results.getScroll().y, i = r + s, n = this.result_highlight.getPosition(this.search_results).y + this.search_results.getScroll().y, t = n + this.result_highlight.getCoordinates().height, t >= i ? this.search_results.scrollTo(0, t - r > 0 ? t - r : 0) : n < s && this.search_results.scrollTo(0, n))
}, result_clear_highlight: function () {
    this.result_highlight && this.result_highlight.removeClass("highlighted"), this.result_highlight = null
}, results_toggle: function () {
    this.results_showing ? this.results_hide() : this.results_show()
}, results_show: function () {
    var e;
    this.is_multiple || (this.selected_item.addClass("chzn-single-with-drop"), this.result_single_selected && this.result_do_highlight(this.result_single_selected)), e = this.is_multiple ? this.container.getCoordinates().height : this.container.getCoordinates().height - 1, this.dropdown.setStyles({top: e, left: 0}), this.results_showing = !0, this.search_field.focus(), this.search_field.set("value", this.search_field.get("value")), this.winnow_results()
}, results_hide: function () {
    this.is_multiple || this.selected_item.removeClass("chzn-single-with-drop"), this.result_clear_highlight(), this.dropdown.setStyle("left", -9e3), this.results_showing = !1
}, set_tab_index: function (e) {
    var t;
    this.form_field.get("tabindex") && (t = this.form_field.get("tabindex"), this.form_field.set("tabindex", -1), this.is_multiple ? this.search_field.set("tabindex", t) : (this.selected_item.set("tabindex", t), this.search_field.set("tabindex", -1)))
}, show_search_field_default: function () {
    this.is_multiple && this.choices < 1 && !this.active_field ? (this.search_field.set("value", this.default_text), this.search_field.addClass("default")) : (this.search_field.set("value", ""), this.search_field.removeClass("default"))
}, search_results_click: function (e) {
    var t = e.target.hasClass("active-result") ? e.target : e.target.getParent(".active-result");
    t && (this.result_highlight = t, this.result_select(e))
}, search_results_mouseover: function (e) {
    var t = e.target.hasClass("active-result") ? e.target : e.target.getParent(".active-result");
    t && this.result_do_highlight(t)
}, search_results_mouseout: function (e) {
    (e.target.hasClass("active-result") || e.target.getParent(".active-result")) && this.result_clear_highlight()
}, choices_click: function (e) {
    e.preventDefault(), this.active_field && !e.target.hasClass("search-choice") && !e.target.getParent(".search-choice") && !this.results_showing && this.results_show()
}, choice_build: function (e) {
    var t = this.container_id + "_c_" + e.array_index;
    this.choices += 1;
    var n = (new Element("li", {id: t})).addClass("search-choice").set("html", "<span>" + e.html + '</span><a href="#" class="search-choice-close" rel="' + e.array_index + '"></a>');
    this.search_container.grab(n, "before"), document.id(t).getElement("a").addEvent("click", this.choice_destroy_link_click.bind(this))
}, choice_destroy_link_click: function (e) {
    e.preventDefault(), this.pending_destroy_click = !0, this.choice_destroy(e.target)
}, choice_destroy: function (e) {
    this.choices -= 1, this.show_search_field_default(), this.is_multiple && this.choices > 0 && this.search_field.value.length < 1 && this.results_hide(), this.result_deselect(e.get("rel")), e.getParent("li").destroy()
}, result_select: function (e) {
    var t, n, r, i;
    this.result_highlight && (t = this.result_highlight, n = t.get("id"), this.result_clear_highlight(), t.addClass("result-selected"), this.is_multiple ? this.result_deactivate(t) : this.result_single_selected = t, i = n.substr(n.lastIndexOf("_") + 1), r = this.results_data[i], r.selected = !0, this.form_field.options[r.options_index].selected = !0, this.is_multiple ? this.choice_build(r) : this.selected_item.getElement("span").set("text", r.text), (!this.is_multiple || !e.control) && this.results_hide(), this.search_field.set("value", ""), this.form_field.fireEvent("change"), typeof this.form_field.onchange == "function" && this.form_field.onchange(), this.search_field_scale())
}, result_activate: function (e) {
    e.addClass("active-result").setStyle("display", "block")
}, result_deactivate: function (e) {
    e.removeClass("active-result").setStyle("display", "none")
}, result_deselect: function (e) {
    var t, n;
    n = this.results_data[e], n.selected = !1, this.form_field.options[n.options_index].selected = !1, t = document.id(this.container_id + "_o_" + e), t.removeClass("result-selected").addClass("active-result").setStyle("display", "block"), this.result_clear_highlight(), this.winnow_results(), this.form_field.fireEvent("change"), this.search_field_scale()
}, results_search: function (e) {
    this.results_showing ? this.winnow_results() : this.results_show()
}, winnow_results: function () {
    var e, t, n, r, i, s, o, u, a, f;
    this.no_results_clear(), s = 0, o = this.search_field.get("value") === this.default_text ? "" : (new Element("div", {text: this.search_field.get("value").trim()})).get("html"), r = new RegExp(o.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), "i"), f = new RegExp(o.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), "i"), this.results_data.each(function (t) {
        if (!t.disabled && !t.empty)if (t.group)document.id(t.dom_id).setStyle("display", "none"); else if (!this.is_multiple || !t.selected) {
            e = !1, i = t.dom_id;
            if (r.test(t.text))e = !0, s += 1; else if (t.text.indexOf(" ") >= 0 || t.text.indexOf("[") === 0)n = t.text.replace(/\[|\]/g, "").split(" "), n.length && n.each(function (t) {
                r.test(t) && (e = !0, s += 1)
            });
            e ? (o.length ? (u = t.html.search(f), a = t.html.substr(0, u + o.length) + "</em>" + t.html.substr(u + o.length), a = a.substr(0, u) + "<em>" + a.substr(u)) : a = t.html, document.id(i).get("html") !== a && document.id(i).set("html", a), this.result_activate(document.id(i)), t.group_array_index != null && document.id(this.results_data[t.group_array_index].dom_id).setStyle("display", "block")) : (this.result_highlight && i === this.result_highlight.get("id") && this.result_clear_highlight(), this.result_deactivate(document.id(i)))
        }
    }, this), s < 1 && o.length ? this.no_results(o) : this.winnow_results_set_highlight()
}, winnow_results_clear: function () {
    this.search_field.set("value", ""), this.search_results.getElements("li").each(function (e) {
        e.hasClass("group-result") ? e.setStyle("display", "block") : !this.is_multiple || !e.hasClass("result-selected") ? this.result_activate(e) : void 0
    }, this)
}, winnow_results_set_highlight: function () {
    if (!this.result_highlight) {
        var e = this.is_multiple ? [] : this.search_results.getElements(".result-selected"), t = e.length ? e[0] : this.search_results.getElement(".active-result");
        t != null && this.result_do_highlight(t)
    }
}, no_results: function (e) {
    var t = (new Element("li", {"class": "no-results"})).set("html", Locale.get("Chosen.noResults") + ' "<span></span>"');
    t.getElement("span").set("html", e), this.search_results.grab(t)
}, no_results_clear: function () {
    this.search_results.getElements(".no-results").destroy()
}, keydown_arrow: function () {
    var e, t;
    this.result_highlight ? this.results_showing && (t = this.result_highlight.getNext("li.active-result"), t && this.result_do_highlight(t)) : (e = this.search_results.getElement("li.active-result"), e && this.result_do_highlight(e)), this.results_showing || this.results_show()
}, keyup_arrow: function () {
    if (!this.results_showing && !this.is_multiple)this.results_show(); else if (this.result_highlight) {
        var e = this.result_highlight.getAllPrevious("li.active-result");
        e.length ? this.result_do_highlight(e[0]) : (this.choices > 0 && this.results_hide(), this.result_clear_highlight())
    }
}, keydown_backstroke: function () {
    this.pending_backstroke ? (this.choice_destroy(this.pending_backstroke.getElement("a")), this.clear_backstroke()) : (this.pending_backstroke = this.search_choices.getLast("li.search-choice"), this.pending_backstroke.addClass("search-choice-focus"))
}, clear_backstroke: function () {
    this.pending_backstroke && this.pending_backstroke.removeClass("search-choice-focus"), this.pending_backstroke = null
}, keyup_checker: function (e) {
    this.search_field_scale();
    switch (e.key) {
        case"backspace":
            this.is_multiple && this.backstroke_length < 1 && this.choices > 0 ? this.keydown_backstroke() : this.pending_backstroke || (this.result_clear_highlight(), this.results_search());
            break;
        case"enter":
            e.preventDefault(), this.results_showing && this.result_select(e);
            break;
        case"esc":
            this.results_showing && this.results_hide();
            break;
        case"tab":
        case"up":
        case"down":
        case"shift":
        case"ctrl":
            break;
        default:
            this.results_search()
    }
}, keydown_checker: function (e) {
    this.search_field_scale(), e.key !== "backspace" && this.pending_backstroke && this.clear_backstroke();
    switch (e.key) {
        case"backspace":
            this.backstroke_length = this.search_field.value.length;
            break;
        case"tab":
            this.mouse_on_container = !1;
            break;
        case"enter":
            e.preventDefault();
            break;
        case"up":
            e.preventDefault(), this.keyup_arrow();
            break;
        case"down":
            this.keydown_arrow()
    }
}, search_field_scale: function () {
    var e, t, n, r, i, s, o, u, a;
    this.is_multiple && (n = 0, o = 0, i = {position: "absolute", visibility: "hidden"}, s = this.search_field.getStyles("font-size", "font-style", "font-weight", "font-family", "line-height", "text-transform", "letter-spacing"), Object.merge(i, s), t = new Element("div", {styles: i}), t.set("text", this.search_field.get("value")), $(document.body).grab(t), o = t.getCoordinates().width + 25, t.destroy(), o > this.f_width - 10 && (o = this.f_width - 10), this.search_field.setStyle("width", o), e = this.container.getCoordinates().height, this.dropdown.setStyle("top", e))
}});
Element.implement({get_side_border_padding: function () {
    var e = this.getStyles("padding-left", "padding-right", "border-left-width", "border-right-width"), t = Object.filter(e, function (e) {
        return typeof e == "string"
    }), n = Object.map(t, function (e) {
        return e.toInt()
    }), r = Object.values(n), i = 0, s = r.length;
    if (s)while (s--)i += r[s];
    return i
}, select_to_array: function () {
    var e = new SelectParser;
    return this.getChildren().each(function (t) {
        e.add_node(t)
    }), e.parsed
}});
var SelectParser = new Class({options_index: 0, parsed: [], add_node: function (e) {
    e.nodeName.toUpperCase() === "OPTGROUP" ? this.add_group(e) : this.add_option(e)
}, add_group: function (e) {
    var t = this.parsed.length;
    this.parsed.push({array_index: t, group: !0, label: e.label, children: 0, disabled: e.disabled}), e.getChildren().each(function (n) {
        this.add_option(n, t, e.disabled)
    }, this)
}, add_option: function (e, t, n) {
    e.nodeName.toUpperCase() === "OPTION" && (e.text !== "" ? (t != null && (this.parsed[t].children += 1), this.parsed.push({array_index: this.parsed.length, options_index: this.options_index, value: e.get("value"), text: e.get("text").trim(), html: e.get("html").replace("[", '<span style="color:#b3b3b3;padding-left:3px">[').replace("]", "]</span>"), selected: e.selected, disabled: n === !0 ? n : e.disabled, group_array_index: t})) : this.parsed.push({array_index: this.parsed.length, options_index: this.options_index, empty: !0}), this.options_index += 1)
}});