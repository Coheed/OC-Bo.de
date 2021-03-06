/* SyntaxHighlighter 3.0.83, (c) 2004-2010 Alex Gorbatchev, http://alexgorbatchev.com/SyntaxHighlighter */
(function () {
    function e() {
        function t(e, t) {
            var n = e[0].indexOf("///") == 0 ? "color1" : "comments";
            return[new SyntaxHighlighter.Match(e[0], e.index, n)]
        }

        var e = "abstract as base bool break byte case catch char checked class const continue decimal default delegate do double else enum event explicit extern false finally fixed float for foreach get goto if implicit in int interface internal is lock long namespace new null object operator out override params private protected public readonly ref return sbyte sealed set short sizeof stackalloc static string struct switch this throw true try typeof uint ulong unchecked unsafe ushort using virtual void while";
        this.regexList = [
            {regex: SyntaxHighlighter.regexLib.singleLineCComments, func: t},
            {regex: SyntaxHighlighter.regexLib.multiLineCComments, css: "comments"},
            {regex: /@"(?:[^"]|"")*"/g, css: "string"},
            {regex: SyntaxHighlighter.regexLib.doubleQuotedString, css: "string"},
            {regex: SyntaxHighlighter.regexLib.singleQuotedString, css: "string"},
            {regex: /^\s*#.*/gm, css: "preprocessor"},
            {regex: new RegExp(this.getKeywords(e), "gm"), css: "keyword"},
            {regex: /\bpartial(?=\s+(?:class|interface|struct)\b)/g, css: "keyword"},
            {regex: /\byield(?=\s+(?:return|break)\b)/g, css: "keyword"}
        ], this.forHtmlScript(SyntaxHighlighter.regexLib.aspScriptTags)
    }

    typeof require != "undefined" ? SyntaxHighlighter = require("shCore").SyntaxHighlighter : null, e.prototype = new SyntaxHighlighter.Highlighter, e.aliases = ["c#", "c-sharp", "csharp"], SyntaxHighlighter.brushes.CSharp = e, typeof exports != "undefined" ? exports.Brush = e : null
})();