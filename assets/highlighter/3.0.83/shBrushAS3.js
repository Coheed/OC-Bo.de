/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
        var e = "class interface function package", t = "-Infinity ...rest Array as AS3 Boolean break case catch const continue Date decodeURI decodeURIComponent default delete do dynamic each else encodeURI encodeURIComponent escape extends false final finally flash_proxy for get if implements import in include Infinity instanceof int internal is isFinite isNaN isXMLName label namespace NaN native new null Null Number Object object_proxy override parseFloat parseInt private protected public return set static String super switch this throw true try typeof uint undefined unescape use void while with";
        this.regexList = [
            {regex: SyntaxHighlighter.regexLib.singleLineCComments, css: "comments"},
            {regex: SyntaxHighlighter.regexLib.multiLineCComments, css: "comments"},
            {regex: SyntaxHighlighter.regexLib.doubleQuotedString, css: "string"},
            {regex: SyntaxHighlighter.regexLib.singleQuotedString, css: "string"},
            {regex: /\b([\d]+(\.[\d]+)?|0x[a-f0-9]+)\b/gi, css: "value"},
            {regex: new RegExp(this.getKeywords(e), "gm"), css: "color3"},
            {regex: new RegExp(this.getKeywords(t), "gm"), css: "keyword"},
            {regex: new RegExp("var", "gm"), css: "variable"},
            {regex: new RegExp("trace", "gm"), css: "color1"}
        ], this.forHtmlScript(SyntaxHighlighter.regexLib.scriptScriptTags)
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["actionscript3", "as3"], SyntaxHighlighter.brushes.AS3 = e, typeof exports != "undefined" ? exports.Brush = e : null
})();