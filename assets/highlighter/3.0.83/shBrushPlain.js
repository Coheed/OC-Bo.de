/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["text", "plain"], SyntaxHighlighter.brushes.Plain = e, typeof exports != "undefined" ? exports.Brush = e : null
})();