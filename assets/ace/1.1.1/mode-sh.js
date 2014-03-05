ace.define("ace/mode/sh", ["require", "exports", "module", "ace/lib/oop", "ace/mode/text", "ace/tokenizer", "ace/mode/sh_highlight_rules", "ace/range"], function (e, t, n) {
    var r = e("../lib/oop"), i = e("./text").Mode, s = e("../tokenizer").Tokenizer, o = e("./sh_highlight_rules").ShHighlightRules, u = e("../range").Range, a = function () {
        this.$tokenizer = new s((new o).getRules())
    };
    r.inherits(a, i), function () {
        this.lineCommentStart = "#", this.getNextLineIndent = function (e, t, n) {
            var r = this.$getIndent(t), i = this.$tokenizer.getLineTokens(t, e), s = i.tokens;
            if (s.length && s[s.length - 1].type == "comment")return r;
            if (e == "start") {
                var o = t.match(/^.*[\{\(\[\:]\s*$/);
                o && (r += n)
            }
            return r
        };
        var e = {pass: 1, "return": 1, raise: 1, "break": 1, "continue": 1};
        this.checkOutdent = function (t, n, r) {
            if (r !== "\r\n" && r !== "\r" && r !== "\n")return!1;
            var i = this.$tokenizer.getLineTokens(n.trim(), t).tokens;
            if (!i)return!1;
            do var s = i.pop(); while (s && (s.type == "comment" || s.type == "text" && s.value.match(/^\s+$/)));
            return s ? s.type == "keyword" && e[s.value] : !1
        }, this.autoOutdent = function (e, t, n) {
            n += 1;
            var r = this.$getIndent(t.getLine(n)), i = t.getTabString();
            r.slice(-i.length) == i && t.remove(new u(n, r.length - i.length, n, r.length))
        }
    }.call(a.prototype), t.Mode = a
}), ace.define("ace/mode/sh_highlight_rules", ["require", "exports", "module", "ace/lib/oop", "ace/mode/text_highlight_rules"], function (e, t, n) {
    var r = e("../lib/oop"), i = e("./text_highlight_rules").TextHighlightRules, s = t.reservedKeywords = "!|{|}|case|do|done|elif|else|esac|fi|for|if|in|then|until|while|&|;|export|local|read|typeset|unset|elif|select|set", o = t.languageConstructs = "[|]|alias|bg|bind|break|builtin|cd|command|compgen|complete|continue|dirs|disown|echo|enable|eval|exec|exit|fc|fg|getopts|hash|help|history|jobs|kill|let|logout|popd|printf|pushd|pwd|return|set|shift|shopt|source|suspend|test|times|trap|type|ulimit|umask|unalias|wait", u = function () {
        var e = this.createKeywordMapper({keyword: s, "support.function.builtin": o, "invalid.deprecated": "debugger"}, "identifier"), t = "(?:(?:[1-9]\\d*)|(?:0))", n = "(?:\\.\\d+)", r = "(?:\\d+)", i = "(?:(?:" + r + "?" + n + ")|(?:" + r + "\\.))", u = "(?:(?:" + i + "|" + r + ")" + ")", a = "(?:" + u + "|" + i + ")", f = "(?:&" + r + ")", l = "[a-zA-Z][a-zA-Z0-9_]*", c = "(?:(?:\\$" + l + ")|(?:" + l + "=))", h = "(?:\\$(?:SHLVL|\\$|\\!|\\?))", p = "(?:" + l + "\\s*\\(\\))";
        this.$rules = {start: [
            {token: ["text", "comment"], regex: /(^|\s)(#.*)$/},
            {token: "string", regex: '"(?:[^\\\\]|\\\\.)*?"'},
            {token: "variable.language", regex: h},
            {token: "variable", regex: c},
            {token: "support.function", regex: p},
            {token: "support.function", regex: f},
            {token: "string", regex: "'(?:[^\\\\]|\\\\.)*?'"},
            {token: "constant.numeric", regex: a},
            {token: "constant.numeric", regex: t + "\\b"},
            {token: e, regex: "[a-zA-Z_$][a-zA-Z0-9_$]*\\b"},
            {token: "keyword.operator", regex: "\\+|\\-|\\*|\\*\\*|\\/|\\/\\/|~|<|>|<=|=>|=|!="},
            {token: "paren.lparen", regex: "[\\[\\(\\{]"},
            {token: "paren.rparen", regex: "[\\]\\)\\}]"}
        ]}
    };
    r.inherits(u, i), t.ShHighlightRules = u
})