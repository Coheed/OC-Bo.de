/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
        this.regexList = [
            {regex: /^\+\+\+.*$/gm, css: "color2"},
            {regex: /^\-\-\-.*$/gm, css: "color2"},
            {regex: /^\s.*$/gm, css: "color1"},
            {regex: /^@@.*@@$/gm, css: "variable"},
            {regex: /^\+[^\+]{1}.*$/gm, css: "string"},
            {regex: /^\-[^\-]{1}.*$/gm, css: "comments"}
        ]
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["diff", "patch"], SyntaxHighlighter.brushes.Diff = e, typeof exports != "undefined" ? exports.Brush = e : null
})();