/* Contao Open Source CMS, (c) 2005-2013 Leo Feyer, LGPL license */
var Typobox = {preInit: function () {
    var e;
    tinyMCEPopup.requireLangPack(), (e = tinyMCEPopup.getParam("external_image_list_url")) && document.write('<script language="javascript" type="text/javascript" src="' + tinyMCEPopup.editor.documentBaseURI.toAbsolute(e) + '"></script>')
}, init: function () {
    var e = document.forms[0], t = tinyMCEPopup.editor;
    document.getElementById("srcbrowsercontainer").innerHTML = getBrowserHTML("srcbrowser", "src", "image", "theme_advanced_image"), isVisible("srcbrowser") && (document.getElementById("src").style.width = "180px"), this.fillFileList("image_list", "tinyMCEImageList"), this.fillModeList("mode_list"), this.fillRelList("rel_list"), TinyMCE_EditableSelects.init(), c = t.selection.getContent();
    if (!c || c.indexOf("image::") == -1)return;
    c = c.replace(/^.*\{\{image::/gi, ""), c = c.replace(/\}\}.*$/i, ""), c = c.replace(/\[&amp;\]|\[&\]|&amp;|&/gi, "?");
    var n = c.split("?");
    e.src.value = n[0];
    for (i = 1; i < n.length; i++) {
        sub = n[i].split("=");
        switch (sub[0]) {
            case"width":
                e.width.value = sub[1];
                break;
            case"height":
                e.height.value = sub[1];
                break;
            case"alt":
                e.alt.value = sub[1];
                break;
            case"class":
                e.cssClass.value = sub[1];
                break;
            case"mode":
                selectByValue(e, "mode_list", sub[1], !0);
                break;
            case"rel":
                selectByValue(e, "rel_list", sub[1], !0)
        }
    }
}, fillFileList: function (e, t) {
    var n = tinyMCEPopup.dom, r = n.get(e), i, s;
    t = window[t], t && t.length > 0 ? (r.options[r.options.length] = new Option("", ""), tinymce.each(t, function (e) {
        r.options[r.options.length] = new Option(e[0], e[1])
    })) : n.remove(n.getParent(e, "tr"))
}, fillModeList: function (e) {
    var t = tinyMCEPopup.dom, n = t.get(e), r;
    n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_proportional"), "proportional"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_box"), "box"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_left_top"), "left_top"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_center_top"), "center_top"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_right_top"), "right_top"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_left_center"), "left_center"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_center_center"), "center_center"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_right_center"), "right_center"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_left_bottom"), "left_bottom"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_center_bottom"), "center_bottom"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_right_bottom"), "right_bottom")
}, fillRelList: function (e) {
    var t = tinyMCEPopup.dom, n = t.get(e), r;
    n.options[n.options.length] = new Option(tinyMCEPopup.getLang("not_set"), ""), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_rel_single"), "lightbox"), n.options[n.options.length] = new Option(tinyMCEPopup.getLang("typolinks_dlg.image_rel_multi"), "lightbox[multi]")
}, update: function () {
    var e = document.forms[0], t = e.elements, n = tinyMCEPopup.editor, r = {}, i;
    tinyMCEPopup.restoreSelection();
    if (e.src.value == "") {
        tinyMCEPopup.close();
        return
    }
    var s = e.src.value, o = "?";
    e.width.value && (s += o + "width=" + e.width.value, o = "&amp;"), e.height.value && (s += o + "height=" + e.height.value, o = "&amp;"), e.alt.value && (s += o + "alt=" + e.alt.value, o = "&amp;"), e.cssClass.value && (s += o + "class=" + e.cssClass.value, o = "&amp;"), e.mode_list && (s += o + "mode=" + getSelectValue(e, "mode_list"), o = "&amp;"), e.rel_list && (s += o + "rel=" + getSelectValue(e, "rel_list"), o = "&amp;"), s = "{{image::" + s + "}}", i = n.selection.getNode(), n.execCommand("mceInsertRawHTML", !1, s), n.undoManager.add(), tinyMCEPopup.close()
}};
Typobox.preInit(), tinyMCEPopup.onInit.add(Typobox.init, Typobox);