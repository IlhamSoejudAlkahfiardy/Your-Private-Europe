<!DOCTYPE html>
<html lang="<?= $language == 'id' ? 'id-ID' : 'en-US' ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://www.astrip-wp.egenslab.com/xmlrpc.php" />
    <link rel="dns-prefetch" href="//astrip-wp.b-cdn.net" />

    <title><?= $language == 'id' ? $title['seo_tag_title_id'] : $title['seo_tag_title_en']   ?></title>
    <!-- hreflang, fetchpriority -->
    <link rel="fetch" hreflang="<?= $language ?>" href="<?= $currentUrl ?>" />
    <!-- hreflang, fetchpriority -->

    <!-- canonical tag -->
    <link rel="canonical" href="<?= $currentUrl ?>" />
    <!-- canonical tag -->

    <!-- meta description -->
    <meta name="description" content="<?= $language == 'id' ? $description['seo_description_id'] : $description['seo_description_en'] ?>">
    <!-- meta description -->

    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="//use.fontawesome.com" />
    <link rel="alternate" type="application/rss+xml" title="Astrip » Feed" href="https://www.astrip-wp.egenslab.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Astrip » Comments Feed" href="https://www.astrip-wp.egenslab.com/comments/feed/" />
    <script src="https://kit.fontawesome.com/278b3e3446.js" crossorigin="anonymous"></script>

    <script>
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/www.astrip-wp.egenslab.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3",
            },
        };
        /*! This file is auto-generated */
        !(function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: new Date().valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t));
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                var t = new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ),
                    r =
                    (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(n, 0, 0),
                        new Uint32Array(
                            e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                        ));
                return t.every(function(e, t) {
                    return e === r[t];
                });
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(
                                e,
                                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                            ) ?
                            !1 :
                            !n(
                                e,
                                "\ud83c\uddfa\ud83c\uddf3",
                                "\ud83c\uddfa\u200b\ud83c\uddf3"
                            ) &&
                            !n(
                                e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(
                            e,
                            "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                        );
                }
                return !1;
            }

            function f(e, t, n) {
                var r =
                    "undefined" != typeof WorkerGlobalScope &&
                    self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) :
                    i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                return (
                    e.forEach(function(e) {
                        o[e] = t(a, e, n);
                    }),
                    o
                );
            }

            function t(e) {
                var t = i.createElement("script");
                (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
                ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }),
                    (e = new Promise(function(e) {
                        i.addEventListener("DOMContentLoaded", e, {
                            once: !0
                        });
                    })),
                    new Promise(function(t) {
                        var n = (function() {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if (
                                    "object" == typeof e &&
                                    "number" == typeof e.timestamp &&
                                    new Date().valueOf() < e.timestamp + 604800 &&
                                    "object" == typeof e.supportTests
                                )
                                    return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if (
                                "undefined" != typeof Worker &&
                                "undefined" != typeof OffscreenCanvas &&
                                "undefined" != typeof URL &&
                                URL.createObjectURL &&
                                "undefined" != typeof Blob
                            )
                                try {
                                    var e =
                                        "postMessage(" +
                                        f.toString() +
                                        "(" + [JSON.stringify(s), u.toString(), p.toString()].join(
                                            ","
                                        ) +
                                        "));",
                                        r = new Blob([e], {
                                            type: "text/javascript"
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: "wpTestEmojiSupports",
                                        });
                                    return void(a.onmessage = function(e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                    .then(function(e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                            (n.supports.everything =
                                n.supports.everything && n.supports[t]),
                            "flag" !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag && n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && !n.supports.flag),
                        (n.DOMReady = !1),
                        (n.readyCallback = function() {
                            n.DOMReady = !0;
                        });
                    })
                    .then(function() {
                        return e;
                    })
                    .then(function() {
                        var e;
                        n.supports.everything ||
                            (n.readyCallback(),
                                (e = n.source || {}).concatemoji ?
                                t(e.concatemoji) :
                                e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                    }));
        })((window, document), window._wpemojiSettings);
    </script>
    <style id="wp-emoji-styles-inline-css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href=" <?= base_url('assets/css/style.min.css') ?>" media="all" />
    <!-- <link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css" media="all" /> -->
    <style id="wp-block-library-theme-inline-css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-audio {
            margin: 0 0 1em;
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: 0.8em 1em;
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-embed {
            margin: 0 0 1em;
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-image {
            margin: 0 0 1em;
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em;
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: 0.8125em;
            font-style: normal;
            text-transform: uppercase;
        }

        .wp-block-quote {
            border-left: 0.25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em;
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: 0.8125em;
            font-style: normal;
            position: relative;
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: 0.25em solid;
            padding-left: 0;
            padding-right: 1em;
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0;
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none;
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700;
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: 0.375em 0.625em;
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em;
        }

        .wp-block-separator.has-css-opacity {
            opacity: 0.4;
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1;
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px;
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px;
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px;
        }

        .wp-block-table {
            margin: 0 0 1em;
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal;
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-video {
            margin: 0 0 1em;
        }

        .wp-block-template-part.has-background {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em;
        }
    </style>
    <style id="classic-theme-styles-inline-css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="<?= base_url('assets/css/styles.css') ?>" media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css" href="<?= base_url('assets/css/woocommerce-layout.css') ?>" media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="<?= base_url('assets/css/woocommerce-smallscreen.css') ?>" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="woocommerce-general-css" href="<?= base_url('assets/css/woocommerce.css') ?>" media="all" />
    <style id="woocommerce-inline-inline-css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <!-- <link rel="stylesheet" id="google-fonts-css" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;family=Satisfy&amp;family=Work+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" media="all" /> -->
    <link rel="stylesheet" id="google-fonts-css" href=href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" media="all" />
    <link rel="stylesheet" id="animate-css" href="<?= base_url('assets/css/animate.css') ?>" media="all" />
    <link rel="stylesheet" id="bootstrap-css" href="<?= base_url('assets/css/bootstrap.min.css') ?>" media="all" />
    <link rel="stylesheet" id="boxicons-css" href="<?= base_url('assets/css/boxicons.min.css') ?>" media="all" />
    <link rel="stylesheet" id="bootstrap-icons-css" href="<?= base_url('assets/css/bootstrap-icons.css') ?>" media="all" />
    <link rel="stylesheet" id="swiper-bundle-css" href="<?= base_url('assets/css/swiper-bundle.css') ?>" media="all" />
    <link rel="stylesheet" id="slick-theme-css" href="<?= base_url('assets/css/slick-theme.css') ?>" media="all" />
    <link rel="stylesheet" id="slick-css" href="<?= base_url('assets/css/slick.css') ?>" media="all" />
    <link rel="stylesheet" id="nice-select-css" href="<?= base_url('assets/css/nice-select.css') ?>" media="all" />
    <link rel="stylesheet" id="magnific-popup-css" href="<?= base_url('assets/css/magnific-popup.css') ?>" media="all" />
    <link rel="stylesheet" id="odometer-css" href="<?= base_url('assets/css/odometer.css') ?>" media="all" />
    <link rel="stylesheet" id="date-ui-css" href="<?= base_url('assets/css/jquery.ui.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-blog-page-css" href="<?= base_url('assets/css/blog-and-page.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-woocommerce-css" href="<?= base_url('assets/css/woocommerce-custom.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-typography-css" href="<?= base_url('assets/css/typography.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-default-css" href="<?= base_url('assets/css/default.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-style-css" href="<?= base_url('assets/css/style_1.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-theme-css" href="<?= base_url('assets/css/style.css') ?>" media="all" />
    <link rel="stylesheet" id="fa5-css" href="<?= base_url('assets/css/all.css') ?>" media="all" />
    <link rel="stylesheet" id="fa5-v4-shims-css" href="<?= base_url('assets/css/v4-shims.css') ?>" media="all" />
    <style id="egns-stylesheet-inline-css">
        .inner-banner-section .breadcrumb-area h2,
        .woocommerce-products-header h1 {
            font-size: 50px;
        }

        .inner-banner-section .breadcrumb-area h2,
        .woocommerce-products-header h1 {
            font-family: Oswald;
        }

        .inner-banner-section .breadcrumb-area h2,
        .woocommerce-products-header h1 {
            color: #fff;
        }

        .inner-banner-section .breadcrumb-area span {
            color: #fff;
        }

        .inner-banner-section,
        .woocommerce-products-header {
            background-color: #000;
        }

        .inner-banner-section,
        .woocommerce-products-header {
            background-image: url("images/breadcrumb-bg.jpg");
        }

        .footer-section {
            background-image: linear-gradient(rgba(9, 16, 13, 0.88),
                    rgba(9, 16, 13, 0.88)),
                url("<?= base_url('assets/images/footer-bg.png') ?>");
        }
    </style>
    <link rel="stylesheet" id="elementor-icons-css" href="<?= base_url('assets/css/elementor-icons.min.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="<?= base_url('assets/css/frontend-lite.min.css') ?>" media="all" />
    <link rel="stylesheet" id="swiper-css" href="<?= base_url('assets/css/swiper.min.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-post-8-css" href="<?= base_url('assets/css/post-8.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-global-css" href="<?= base_url('assets/css/global.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-post-234-css" href="<?= base_url('assets/css/post-234.css') ?>" media="all" />
    <!-- <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3" media="all" /> -->
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?= base_url('assets/css/fontawesome.min.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?= base_url('assets/css/solid.min.css') ?>" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <script src="<?= base_url('assets/js/jquery.min.js') ?>" id="jquery-core-js"></script>
    <script src="<?= base_url('assets/js/jquery-migrate.min.js') ?>" id="jquery-core-js"></script>
    <script src="<?= base_url('assets/js/jquery.blockUI.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/jquery.min.js" id="jquery-core-js"></script> -->
    <!-- <script src="js/jquery-migrate.min.js" id="jquery-migrate-js"></script> -->
    <!-- <script src="js/jquery.blockUI.min.js" id="jquery-blockui-js" defer="" data-wp-strategy="defer"></script> -->
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
            i18n_view_cart: "View cart",
            cart_url: "https:\/\/www.astrip-wp.egenslab.com\/cart\/",
            is_cart: "",
            cart_redirect_after_add: "no",
        };
    </script>
    <script src="<?= base_url('assets/js/add-to-cart.min.js') ?>" id="jquery-core-js"></script>
    <script src="<?= base_url('assets/js/js.cookie.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/add-to-cart.min.js" id="wc-add-to-cart-js" defer="" data-wp-strategy="defer"></script> -->
    <!-- <script src="js/js.cookie.min.js" id="js-cookie-js" defer="" data-wp-strategy="defer"></script> -->
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
        };
    </script>
    <script src="<?= base_url('assets/js/woocommerce.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/woocommerce.min.js" id="woocommerce-js" defer="" data-wp-strategy="defer"></script> -->
    <link rel="https://api.w.org/" href="https://www.astrip-wp.egenslab.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://www.astrip-wp.egenslab.com/wp-json/wp/v2/pages/234" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.astrip-wp.egenslab.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <meta name="generator" content="WooCommerce 8.3.0" />
    <link rel="canonical" href="https://www.astrip-wp.egenslab.com/" />
    <link rel="shortlink" href="https://www.astrip-wp.egenslab.com/" />
    <link rel="alternate" type="application/json+oembed" href="https://www.astrip-wp.egenslab.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.astrip-wp.egenslab.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.astrip-wp.egenslab.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.astrip-wp.egenslab.com%2F&amp;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
    <link rel="icon" href="<?= base_url('assets/images/YPE-LOGO-BLUE-GOLD.png') ?>" sizes="32x32" />
    <link rel="icon" href="<?= base_url('assets/images/YPE-LOGO-BLUE-GOLD.png') ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/YPE-LOGO-BLUE-GOLD.png') ?>" />
    <meta name="msapplication-TileImage" content="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/02/favicon.svg" />
    <style id="wp-custom-css">
        .footer-section .footer-item ul li:hover a {
            color: #ddd;
        }
    </style>
    <script src="<?= base_url('assets/js/wp-emoji-release.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/wp-emoji-release.min.js" defer=""></script> -->
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-234 wp-embed-responsive theme-astrip woocommerce-js elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-234">
    <div class="topbar d-xl-flex d-none">
        <div class="container-lg container-fluid d-flex justify-content-between align-items-center">
            <div class="topbar-left">
                <ul class="topbar-info-list">
                    <!-- <li>
                        <i class="bi bi-clock"></i>
                        Opening Hours: 8am - 6pm
                    </li> -->
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        Dharmahusada Mas VII AB-22 60115 Surabaya, Indonesia
                    </li>
                </ul>
            </div>
            <div class="topbar-right">
                <ul class="topbar-right-list">
                    <li></li>
                    <!-- <li>
                        <div class="main-nav-wrapper">
                            <ul id="menu-topbar-menu" class="topbar-menu">
                                <li id="menu-item-1938" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1938">
                                    <a href="https://www.astrip-wp.egenslab.com/my-account/">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
                <div class="topbar-right-social_list">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/yourprivateeurope">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/@yourprivateeurope">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.tiktok.com/@yourprivateeurope">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/your-private-europe/"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/yourprivateeurope/"><i class="fab fa-instagram"></i></a>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="progress">
        <span id="progress-value"><i class="bi bi-arrow-up-short"></i></span>
    </div> -->
    <!--Start preloader area -->
    <!-- <div class="egns-preloader">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="circle-border">
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet" style="
              left: 50%;
              top: 50%;
              position: absolute;
              transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);
            ">
                            <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
                            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="close-btn">
            <span><i class="bi bi-x-lg"></i> Close</span>
        </div>
    </div> -->
    <!--End preloader area  -->
    <!-- ========== header============= -->

    <header class="header-area style-2">
        <div class="container d-flex gap-4 justify-content-between align-items-center">
            <div class="header-logo">
                <a href="<?= base_url('/') ?>" title="Astrip">
                    <img loading="lazy" class="img-fluid" src="<?= base_url('assets/images/YPE-LOGO-FULL-BLUE-GOLD-2.png') ?>" alt="Astrip" style="
            width: 300px;
            " /></a>
            </div>
            <div class="header-logo header-sticky-logo">
                <a href="<?= base_url('/') ?>" title="Astrip">
                    <img loading="lazy" class="img-fluid" src="<?= base_url('assets/images/YPE-LOGO-FULL-BLUE-GOLD-2.png') ?>" alt="Astrip" style="
            width: 200px;
            " /></a>
            </div>
            <div class="main-nav">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
                        <a href="<?= base_url('/') ?>" title="Astrip">
                            <img loading="lazy" class="img-fluid" src="<?= base_url('assets/images/YPE-LOGO-FULL-BLUE-GOLD-2.png') ?>" alt="Astrip" style="
                width: 200px;
                " /></a>
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x-lg text-dark"></i>
                    </div>
                </div>
                <div class="main-nav-wrapper">
                    <ul id="menu-main-menu" class="ul">
                        <!-- <li
                id="menu-item-1982"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-234 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1982"
              >
                <a
                  href="https://www.astrip-wp.egenslab.com/"
                  aria-current="page"
                  >Home</a
                ><i class="bi bi-chevron-down"></i>
                <ul class="sub-menu">
                  <li
                    id="menu-item-2016"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-234 current_page_item menu-item-2016"
                  >
                    <a
                      href="https://www.astrip-wp.egenslab.com/"
                      aria-current="page"
                      >Travel Agency 01</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                  <li
                    id="menu-item-2000"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2000"
                  >
                    <a href="https://www.astrip-wp.egenslab.com/home-02/"
                      >Travel Agency 02</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                  <li
                    id="menu-item-1994"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1994"
                  >
                    <a href="https://www.astrip-wp.egenslab.com/city-tour/"
                      >City Tour</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                  <li
                    id="menu-item-1985"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1985"
                  >
                    <a href="https://www.astrip-wp.egenslab.com/adventure/"
                      >Adventure</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                </ul>
              </li> -->
                        <li id="menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2339">
                            <a href="#"><?= lang("text_homepage.services") ?></a><i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">

                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a href="#">VIP Services</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a href="#">Private Tour</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a href="#">MICE</a><i class="bi bi-chevron-down"></i>
                                </li>

                            </ul>
                        </li>
                        <li id="menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2339">
                            <a href="/destination"><?= lang("text_homepage.destination") ?></a><i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <?php foreach ($navbarDestinations as $navbarDestination) : ?>
                                    <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                        <a href="<?= base_url('/destination/' . $navbarDestination['slug']) ?>"><?= $navbarDestination['title'] ?></a><i class="bi bi-chevron-down"></i>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <!-- <li
                id="menu-item-2012"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2012"
              >
                <a href="#">Tour</a><i class="bi bi-chevron-down"></i>
                <ul class="sub-menu">
                  <li
                    id="menu-item-2064"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2064"
                  >
                    <a href="https://www.astrip-wp.egenslab.com/tour/"
                      >Tour Package 01</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                  <li
                    id="menu-item-1993"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1993"
                  >
                    <a href="https://www.astrip-wp.egenslab.com/package-grid-2/"
                      >Tour Package 02</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                  <li
                    id="menu-item-2003"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2003"
                  >
                    <a
                      href="https://www.astrip-wp.egenslab.com/package-sidebar/"
                      >Package Sidebar</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                  <li
                    id="menu-item-2065"
                    class="menu-item menu-item-type-post_type menu-item-object-astrip-tour menu-item-2065"
                  >
                    <a
                      href="https://www.astrip-wp.egenslab.com/tour/aegean-adventure/"
                      >Package Details</a
                    ><i class="bi bi-chevron-down"></i>
                  </li>
                </ul>
              </li> -->

                        <li id="menu-item-2015" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2015">
                            <a href="/article"><?= lang("text_homepage.article") ?></a>
                            <!-- <i class="bi bi-chevron-down"></i> -->
                            <!-- <ul class="sub-menu">
                                <li id="menu-item-1987" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1987">
                                    <a href="https://www.astrip-wp.egenslab.com/blog-grid/">Blog Grid</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-1983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1983">
                                    <a href="https://www.astrip-wp.egenslab.com/blog-standard/">Blog Standard</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-1988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1988">
                                    <a href="https://www.astrip-wp.egenslab.com/blog-left-sidebar/">Blog Left-Sidebar</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-1989" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1989">
                                    <a href="https://www.astrip-wp.egenslab.com/blog-right-sidebar/">Blog Right-Sidebar</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2586" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2586">
                                    <a href="https://www.astrip-wp.egenslab.com/what-to-know-before-you-travel-plan-a-trip/">Blog Details</a><i class="bi bi-chevron-down"></i>
                                </li>
                            </ul> -->
                        </li>
                        <li id="menu-item-1995" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1995">
                            <a href="#">Corporate & Travel Agent</a><i class="bi bi-chevron-down"></i>
                        </li>
                        <li id="menu-item-2013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2013">
                            <a href="#"><?= lang("text_homepage.help_support_navbar") ?></a><i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li id="menu-item-1984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1984">
                                    <a href="#">Tentang Kami</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2017">
                                    <a href="#">Hubungi Kami</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-1999" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1999">
                                    <a href="#">FAQ</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <!-- <li
                  id="menu-item-2005"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2005"
                >
                  <a
                    href="https://www.astrip-wp.egenslab.com/questions-answers/"
                    >FAQ’s</a
                  ><i class="bi bi-chevron-down"></i>
                </li>
                                <li id="menu-item-2396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2396">
                                    <a href="#">My account</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2394">
                                    <a href="#">Cart</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2395">
                                    <a href="#">Checkout</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2018">
                                    <a href="/error">Error</a><i class="bi bi-chevron-down"></i>
                                </li> -->
                            </ul>
                        </li>
                        <li id="menu-item-2013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2013">
                            <a href="#"><?= lang("text_homepage.language") ?></a><i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li id="menu-item-1984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1984">
                                    <a href="<?= site_url('lang/id'); ?>">Indonesian</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2017">
                                    <a href="<?= site_url('lang/en'); ?>">English</a><i class="bi bi-chevron-down"></i>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- mobile-search-area -->

                <div class="phone-call sibling2 d-flex justify-content-start align-items-center flex-row d-lg-none d-block mt-5">
                    <!-- <div class="icon">
              <img loading="lazy" src="images/cell-icon.svg" alt="image" />
            </div>
            <div class="number">
              <span>Call Now</span>

              <h5><a href="tel:+8801701111000">+(62) 0895-1425-3344</a></h5>
            </div> -->
                </div>

                <!-- <a
            href="https://www.example.com"
            class="eg-btn btn--primary btn--lg d-lg-none d-flex mt-5"
            >Please add Button Text</a
          > -->
            </div>

            <div class="nav-right d-flex jsutify-content-end align-items-center gap-5">
                <div class="phone-call sibling2 justify-content-start align-items-center flex-row d-xl-flex d-none">
                    <!-- <div class="icon">
              <img loading="lazy" src="images/cell-icon.svg" alt="image" />
            </div>
            <div class="number">
              <span>Call Now</span>
              <h5><a href="tel:+8801701111000">+880 170 1111 000</a></h5>
            </div> -->
                </div>
                <div class="mobile-menu-btn d-lg-none d-block">
                    <i class="bi bi-list text-dark"></i>
                </div>
            </div>
        </div>
    </header>


    <!-- this is content -->
    <?= $this->renderSection('content') ?>


    <footer class="footer-section">
        <div class="footer-top">
            <div class="container-xl container-lg-fluid container">
                <div class="row gy-5">


                    <!-- <div class="col-lg-3 col-md-6">
                  <div class="footer-item">
                    <div class="footer-item">
                      <div
                        id="block-7"
                        class="destination-widget-item widget_block"
                      >
                        <div class="footer-item">
                          <div
                            id="block-7"
                            class="destination-widget-item widget_block"
                          >
                            <div class="footer-about">
                              <img loading="lazy"
                                src="images/footer-plane.svg"
                                class="footer-plane"
                                alt="image"
                              />
                              <div class="footer1-logo">
                                <img loading="lazy" src="images/footer1-logo.svg" alt="image" />
                                <p>Since: 2023</p>
                              </div>
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1"
                                viewBox="0 0 400 400"
                              >
                                <defs>
                                  
                                  <path
                                    d="M0, 200a200, 200 0 1, 0 400, 0a200, 200 0 1, 0 -400, 0"
                                    id="txt-path"
                                    fill="white"
                                  ></path>
                                </defs>
    
                                <text
                                  fill="#DDDDDD"
                                  font-size="35.5"
                                  font-family="Helvetica Neue"
                                  font-weight="600"
                                >
                                  
                                  <textPath startOffset="0" xlink:href="#txt-path">
                                    Astrip Travel Agency �&nbsp; Astrip Travel
                                    Agency
                                  </textPath>
                                </text>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->


                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                        <div class="footer-item">
                            <div id="nav_menu-2" class="destination-widget-item widget_nav_menu">
                                <div class="destination-widget-title">
                                    <h3><?= lang("text_homepage.information") ?></h3>
                                </div>
                                <div class="menu-information-container">
                                    <ul id="menu-information" class="menu">
                                        <li id="menu-item-1932" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                            <a href="https://www.astrip-wp.egenslab.com/about-us/"><?= lang("text_homepage.about_us") ?></a>
                                        </li>
                                        <!-- <li
                            id="menu-item-1933"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1933"
                          >
                            <a href="#">Online Query</a>
                          </li> -->
                                        <!-- <li
                            id="menu-item-1934"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1934"
                          >
                            <a href="#">Become Partner</a>
                          </li> -->
                                        <li id="menu-item-1935" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1935">
                                            <a href="#"><?= lang("text_homepage.help_support") ?></a>
                                        </li>
                                        <li id="menu-item-1936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1936">
                                            <a href="https://www.astrip-wp.egenslab.com/contact-us/"><?= lang("text_homepage.contact_us") ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                        <div class="footer-item">
                            <div id="nav_menu-3" class="destination-widget-item widget_nav_menu">
                                <div class="destination-widget-title">
                                    <h3><?= lang("text_homepage.destination") ?></h3>
                                </div>
                                <div class="menu-destination-container">
                                    <ul id="menu-destination" class="menu">
                                        <li id="menu-item-946" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-946">
                                            <a href="#">Best of Switzerland</a>
                                        </li>
                                        <li id="menu-item-947" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-947">
                                            <a href="#">Heart of England</a>
                                        </li>
                                        <li id="menu-item-948" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-948">
                                            <a href="#">Best of Balkan</a>
                                        </li>
                                        <li id="menu-item-949" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-949">
                                            <a href="#">Best of Iberia</a>
                                        </li>
                                        <li id="menu-item-1937" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1937">
                                            <a href="#">Central Europe</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-end">
                        <div class="footer-item">
                            <div id="egens_contacts-3" class="destination-widget-item widget_egens_contacts">
                                <div class="destination-widget-title">
                                    <h3><?= lang("text_homepage.reach_us") ?></h3>
                                </div>
                                <ul class="contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div class="text">
                                            <a href="tel:+1-202-555-0144">+1-202-555-0144</a>
                                            <a href="tel:+1-202-555-0152">+1-202-555-0152</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <a href="mailto:info@example.com">info@example.com</a>
                                            <a href="mailto:support@example.com">support@example.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="text">
                                            Dharmahusada Mas VII AB-22 60115 Surabaya, Indonesia
                                            +(62) 0895-1425-3344
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row footer-meta">
                    <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center align-items-center mb-lg-0 mb-5">
                        <h4>Stay Connected:</h4>

                        <ul class="footer-social">
                            <li>
                                <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://pinterest.com"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center">
                        <h4>Pay Safely With Us!</h4>

                        <ul class="pay-list">
                            <li><img loading="lazy" src="images/pay1.svg" alt="" /></li>
                            <li><img loading="lazy" src="images/pay2.svg" alt="" /></li>
                            <li><img loading="lazy" src="images/pay3.svg" alt="" /></li>
                            <li><img loading="lazy" src="images/pay4.svg" alt="" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer-bottom mt-80">
                <div class="row d-flex align-items-center g-3 justify-content-md-between">
                    <div class="col-md-6 d-flex justify-content-lg-start justify-content-center text-lg-start text-center">
                        <p>
                            Copyright 2024 <a href="#">Your Private Europe</a> | Design By
                            <a href="3">Your Private Europe</a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-lg-end justify-content-center align-items-center">
                        <ul class="f-bottom-list d-flex jusify-content-start align-items-center">
                            <li><a target="_blank" href="#">Privacy Policy</a></li>
                            <li><a target="_blank" href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim();
                if (value !== "" && value.indexOf("http") !== 0) {
                    this.value = "http://" + value;
                }
            }

            const urlFields = document.querySelectorAll(
                '.mc4wp-form input[type="url"]'
            );
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener("blur", maybePrefixUrlField);
            }
        })();
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, "woocommerce-js");
            document.body.className = c;
        })();
    </script>
    <script src="<?= base_url('assets/js/index.js') ?>" id="swv-js"></script>
    <script id="contact-form-7-js-extra">
        var wpcf7 = {
            api: {
                root: "https:\/\/www.astrip-wp.egenslab.com\/wp-json\/",
                namespace: "contact-form-7\/v1",
            },
        };
    </script>
    <script src="<?= base_url('assets/js/index_1.js') ?>" id="contact-form-7-js"></script>
    <script src="<?= base_url('assets/js/imagesloaded.min.js') ?>" id="imagesloaded-js"></script>
    <script src="<?= base_url('assets/js/masonry.min.js') ?>" id="masonry-js"></script>
    <script src="<?= base_url('assets/js/jquery.masonry.min.js') ?>" id="jquery-masonry-js"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js') ?>" id="jquery-ui-js"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" id="bootstrap-js"></script>
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>" id="swiper-js"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>" id="isotope-js"></script>
    <script src="<?= base_url('assets/js/slick.js') ?>" id="slick-js"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.js') ?>" id="nice-select-js"></script>
    <script src="<?= base_url('assets/js/odometer.min.js') ?>" id="odometer-js"></script>
    <script src="<?= base_url('assets/js/viewport.jquery.js') ?>" id="viewport-js"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>" id="magnific-popup-js"></script>
    <script id="egns-main-js-extra">
        var egns_theme_options = {
            sticky_header_enable: "",
            animation_enable: "",
            is_cart: "",
            is_product: "",
            is_woocommerce: "1",
        };
        var egens_frontend_ajax_handler_params = {
            ajaxurl: "https:\/\/www.astrip-wp.egenslab.com\/wp-admin\/admin-ajax.php",
            posts: '{"error":"","m":"","p":"234","post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":"234","second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"search_columns":[],"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"update_menu_item_cache":false,"lazy_load_term_meta":true,"update_post_meta_cache":true,"post_type":"","posts_per_page":6,"nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"}',
            current_page: "1",
            max_page: "0",
            wp_date_format: "F j, Y",
            get_all_criteria: [{
                    criteria_item: "Overall"
                },
                {
                    criteria_item: "Accommodation"
                },
                {
                    criteria_item: "Transport"
                },
                {
                    criteria_item: "Food"
                },
                {
                    criteria_item: "Destination"
                },
            ],
            is_egns_core_enable: "1",
        };
    </script>
    <script src="<?= base_url('assets/js/main.js') ?>" id="egns-main-js"></script>
    <script defer="" src="<?= base_url('assets/js/forms.js') ?>" id="mc4wp-forms-api-js"></script>
    <script src="<?= base_url('assets/js/webpack.runtime.min.js') ?>" id="elementor-webpack-runtime-js"></script>
    <script src="<?= base_url('assets/js/frontend-modules.min.js') ?>" id="elementor-frontend-modules-js"></script>
    <script src="<?= base_url('assets/js/waypoints.min.js') ?>" id="elementor-waypoints-js"></script>
    <script src="<?= base_url('assets/js/core.min.js') ?>" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: {
                edit: false,
                wpPreview: false,
                isScriptDebug: false,
            },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
                a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
                a11yCarouselPrevSlideMessage: "Previous slide",
                a11yCarouselNextSlideMessage: "Next slide",
                a11yCarouselFirstSlideMessage: "This is the first slide",
                a11yCarouselLastSlideMessage: "This is the last slide",
                a11yCarouselPaginationBulletMessage: "Go to slide",
            },
            is_rtl: false,
            breakpoints: {
                xs: 0,
                sm: 480,
                md: 768,
                lg: 1025,
                xl: 1440,
                xxl: 1600
            },
            responsive: {
                breakpoints: {
                    mobile: {
                        label: "Mobile Portrait",
                        value: 767,
                        default_value: 767,
                        direction: "max",
                        is_enabled: true,
                    },
                    mobile_extra: {
                        label: "Mobile Landscape",
                        value: 880,
                        default_value: 880,
                        direction: "max",
                        is_enabled: false,
                    },
                    tablet: {
                        label: "Tablet Portrait",
                        value: 1024,
                        default_value: 1024,
                        direction: "max",
                        is_enabled: true,
                    },
                    tablet_extra: {
                        label: "Tablet Landscape",
                        value: 1200,
                        default_value: 1200,
                        direction: "max",
                        is_enabled: false,
                    },
                    laptop: {
                        label: "Laptop",
                        value: 1366,
                        default_value: 1366,
                        direction: "max",
                        is_enabled: false,
                    },
                    widescreen: {
                        label: "Widescreen",
                        value: 2400,
                        default_value: 2400,
                        direction: "min",
                        is_enabled: false,
                    },
                },
            },
            version: "3.17.3",
            is_static: false,
            experimentalFeatures: {
                e_dom_optimization: true,
                e_optimized_assets_loading: true,
                e_optimized_css_loading: true,
                additional_custom_breakpoints: true,
                "landing-pages": true,
            },
            urls: {
                assets: "https:\/\/www.astrip-wp.egenslab.com\/wp-content\/plugins\/elementor\/assets\/",
            },
            swiperClass: "swiper-container",
            settings: {
                page: [],
                editorPreferences: []
            },
            kit: {
                active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: {
                id: 234,
                title: "Astrip%20%E2%80%93%20Tour%20and%20Travel%20Agency%20WordPress%20Theme",
                excerpt: "",
                featuredImage: false,
            },
        };
    </script>
    <script src="<?= base_url('assets/js/frontend.min.js') ?>" id="elementor-frontend-js"></script>
</body>

</html>