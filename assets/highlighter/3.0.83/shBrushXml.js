/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
        function e(e, t) {
            var n = SyntaxHighlighter.Match, r = e[0], i = (new XRegExp("(&lt;|<)[\\s\\/\\?]*(?<name>[:\\w-\\.]+)", "xg")).exec(r), s = [];
            if (e.attributes != null) {
                var o, u = new XRegExp("(?<name> [\\w:\\-\\.]+)\\s*=\\s*(?<value> \".*?\"|'.*?'|\\w+)", "xg");
                while ((o = u.exec(r)) != null)s.push(new n(o.name, e.index + o.index, "color1")), s.push(new n(o.value, e.index + o.index + o[0].indexOf(o.value), "string"))
            }
            return i != null && s.push(new n(i.name, e.index + i[0].indexOf(i.name), "keyword")), s
        }

        this.regexList = [
            {regex: new XRegExp("(\\&lt;|<)\\!\\[[\\w\\s]*?\\[(.|\\s)*?\\]\\](\\&gt;|>)", "gm"), css: "color2"},
            {regex: SyntaxHighlighter.regexLib.xmlComments, css: "comments"},
            {regex: new XRegExp("(&lt;|<)[\\s\\/\\?]*(\\w+)(?<attributes>.*?)[\\s\\/\\?]*(&gt;|>)", "sg"), func: e}
        ]
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["xml", "xhtml", "xslt", "html"], SyntaxHighlighter.brushes.Xml = e, typeof exports != "undefined" ? exports.Brush = e : null
})();