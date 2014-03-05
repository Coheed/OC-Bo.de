/* Contao Open Source CMS, (c) 2005-2013 Leo Feyer, LGPL license */
var SORT_INDEX, THOUSANDS_SEPARATOR = ",", DECIMAL_SEPARATOR = ".", TableSort = new Class({initialize: function (e, t, n) {
    t && (THOUSANDS_SEPARATOR = t), n && (DECIMAL_SEPARATOR = n);
    if (!e.rows || e.rows.length < 1 || !e.tHead || e.tHead.rows.length < 1)return;
    var r = null, i = Cookie.read("TS_" + e.get("id").toUpperCase());
    if (i !== null)var r = i.split("|");
    var s = e.tHead.rows[e.tHead.rows.length - 1];
    for (var o = 0; o < s.cells.length; o++) {
        if (s.cells[o].className.indexOf("unsortable") != -1)continue;
        var u = s.cells[o], a = u.innerHTML, f = (new Element("a")).addClass("pointer");
        f.innerHTML = a, u.innerHTML = "", f.addEvent("click", function (e, t) {
            this.resort(e, t)
        }.pass([o, u], this)).inject(u), r !== null && r[0] == o && ($(u).addClass(r[1] == "desc" ? "asc" : "desc"), this.resort(r[0], u))
    }
}, resort: function (e, t) {
    var n = $(t);
    if (n == null)return;
    var r = n.getParent("tr"), i = r.getParent("table");
    if (i == null || i.tBodies[0].rows.length < 2)return;
    SORT_INDEX = e;
    var s = 0, o = "";
    while (o == "" && i.tBodies[0].rows[s])o = i.tBodies[0].rows[s].cells[e].innerHTML.replace(/<[^>]+>/g, "").clean(), s++;
    var u = [];
    for (var s = 0; s < i.tBodies[0].rows.length; s++)u[s] = i.tBodies[0].rows[s];
    t.className.indexOf("date") != -1 || o.match(/^\d{1,4}[\/\. -]\d{1,2}[\/\. -]\d{1,4}$/) ? u.sort(this.sortDate) : t.className.indexOf("currency") != -1 || o.match(/^[£$€Û¢´]/) || o.match(/^-?[\d\.,]+[£$€]$/) ? u.sort(this.sortNumeric) : t.className.indexOf("numeric") != -1 || o.match(/^-?[\d\.,]+(E[-+][\d]+)?$/) || o.match(/^-?[\d\.,]+%?$/) ? u.sort(this.sortNumeric) : u.sort(this.sortCaseInsensitive);
    var a = $$("base").get("href"), f = a[0].replace(window.location.protocol + "//", "").replace(window.location.host, "").replace(/\/$/, "") || "/";
    if (t.className.indexOf("asc") == -1) {
        var l = r.getChildren();
        for (var s = 0; s < l.length; s++)l[s].removeClass("asc"), l[s].removeClass("desc");
        t.addClass("asc"), Cookie.write("TS_" + i.id.toUpperCase(), e + "|asc", {path: f})
    } else {
        var l = r.getChildren();
        for (var s = 0; s < l.length; s++)l[s].removeClass("asc"), l[s].removeClass("desc");
        t.addClass("desc"), Cookie.write("TS_" + i.id.toUpperCase(), e + "|desc", {path: f}), u.reverse()
    }
    for (s = 0; s < u.length; s++) {
        var c = u[s].className;
        c = c.replace(/row_\d+/, "").replace(/odd|even|row_first|row_last/g, "").clean(), c += " row_" + s, s == 0 && (c += " row_first"), s >= u.length - 1 && (c += " row_last"), c += s % 2 == 0 ? " even" : " odd", u[s].className = c.trim();
        for (j = 0; j < u[s].cells.length; j++) {
            var c = u[s].cells[j].className;
            c = c.replace(/col_\d+/, "").replace(/odd|even|col_first|col_last/g, "").clean(), c += " col_" + j, j == 0 && (c += " col_first"), j >= u[s].cells.length - 1 && (c += " col_last"), u[s].cells[j].className = c.trim()
        }
        i.tBodies[0].appendChild(u[s])
    }
}, sortDate: function (e, t) {
    aa = e.cells[SORT_INDEX].innerHTML.replace(/<[^>]+>/g, "").clean(), bb = t.cells[SORT_INDEX].innerHTML.replace(/<[^>]+>/g, "").clean();
    var n = aa.replace(/[\/\.-]/g, " ").split(" "), r = bb.replace(/[\/\.-]/g, " ").split(" ");
    if (aa.match(/^\d{1,2}[\/\. -]\d{1,2}[\/\. -]\d{2,4}$/))var i = (n[2].length == 4 ? n[2] : "19" + n[2]) + (n[1].length == 2 ? n[1] : "0" + n[1]) + (n[0].length == 2 ? n[0] : "0" + n[0]), s = (r[2].length == 4 ? r[2] : "19" + r[2]) + (r[1].length == 2 ? r[1] : "0" + r[1]) + (r[0].length == 2 ? r[0] : "0" + r[0]);
    if (aa.match(/^\d{2,4}[\/\. -]\d{1,2}[\/\. -]\d{1,2}$/))var i = (n[0].length == 4 ? n[0] : "19" + n[0]) + (n[1].length == 2 ? n[1] : "0" + n[1]) + (n[2].length == 2 ? n[2] : "0" + n[2]), s = (r[0].length == 4 ? r[0] : "19" + r[0]) + (r[1].length == 2 ? r[1] : "0" + r[1]) + (r[2].length == 2 ? r[2] : "0" + r[2]);
    return i == s ? 0 : i < s ? -1 : 1
}, sortNumeric: function (e, t) {
    var n = new RegExp("\\" + THOUSANDS_SEPARATOR, "g");
    return aa = e.cells[SORT_INDEX].innerHTML.replace(n, ""), bb = t.cells[SORT_INDEX].innerHTML.replace(n, ""), DECIMAL_SEPARATOR != "." && (aa = aa.replace(DECIMAL_SEPARATOR, "."), bb = bb.replace(DECIMAL_SEPARATOR, ".")), aa = aa.replace(/<[^>]+>/).replace(/[^0-9\.,-]/g, "").clean(), bb = bb.replace(/<[^>]+>/).replace(/[^0-9\.,-]/g, "").clean(), aa = parseFloat(aa), isNaN(aa) && (aa = 0), bb = parseFloat(bb), isNaN(bb) && (bb = 0), aa - bb
}, sortCaseInsensitive: function (e, t) {
    return aa = e.cells[SORT_INDEX].innerHTML.replace(/<[^>]+>/g, "").clean().toLowerCase(), bb = t.cells[SORT_INDEX].innerHTML.replace(/<[^>]+>/g, "").clean().toLowerCase(), aa == bb ? 0 : aa < bb ? -1 : 1
}});