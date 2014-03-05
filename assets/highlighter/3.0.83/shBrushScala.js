/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
        var e = "val sealed case def true trait implicit forSome import match object null finally super override try lazy for var catch throw type extends class while with new final yield abstract else do if return protected private this package false", t = "[_:=><%#@]+";
        this.regexList = [
            {regex: SyntaxHighlighter.regexLib.singleLineCComments, css: "comments"},
            {regex: SyntaxHighlighter.regexLib.multiLineCComments, css: "comments"},
            {regex: SyntaxHighlighter.regexLib.multiLineSingleQuotedString, css: "string"},
            {regex: SyntaxHighlighter.regexLib.multiLineDoubleQuotedString, css: "string"},
            {regex: SyntaxHighlighter.regexLib.singleQuotedString, css: "string"},
            {regex: /0x[a-f0-9]+|\d+(\.\d+)?/gi, css: "value"},
            {regex: new RegExp(this.getKeywords(e), "gm"), css: "keyword"},
            {regex: new RegExp(t, "gm"), css: "keyword"}
        ]
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["scala"], SyntaxHighlighter.brushes.Scala = e, typeof exports != "undefined" ? exports.Brush = e : null
})();