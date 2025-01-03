(() => { 
    "use strict";
    var e,
        t = {
            379: () => {
                const e = window.wp.hooks;
                (0, e.hasFilter)("wpBootsBlocks.container.customMarginOptions") &&
                    console.warn("`wpBootsBlocks.container.customMarginOptions` filter was renamed to `wpBootsBlocks.container.marginAfterOptions`. Please change your filter definition."),
                    (0, e.hasFilter)("wpBootsBlocks.container.useFluidContainerPerDefault") &&
                        console.warn("`wpBootsBlocks.container.useFluidContainerPerDefault` filter has been removed. Please use `wp_bootstrap_blocks_container_default_attributes` filter (PHP) instead."),
                    (0, e.hasFilter)("wpBootsBlocks.row.useOldObjectTemplateStructure") &&
                        console.warn("`wpBootsBlocks.row.useOldObjectTemplateStructure` filter has no effect since the old template structure is not supported anymore. You can safely remove this filter.");
                const t = window.React,
                    o = window.wp.blocks,
                    l = window.wp.components;
                o.updateCategory &&
                    (0, o.updateCategory)("boot-blocks", {
                        icon: (0, t.createElement)(
                            l.SVG,
                            { viewBox: "0 0 120 120", xmlns: "http://www.w3.org/2000/svg" },
                            (0, t.createElement)(l.Rect, { stroke: "#979797", fill: "#6EA644", x: "-110.5", y: "-123.5", width: "340", height: "367" }),
                            (0, t.createElement)(l.Path, {
                                d:
                                    "M105.362393,45.9570783 C103.695123,44.8177711 101.427637,45.2868976 100.293893,46.9623494 C93.6915059,56.9480422 79.6864416,57.4841867 78.952843,57.4841867 C78.8194614,57.4841867 78.7527707,57.4841867 78.6193891,57.4841867 C61.3464764,57.4841867 54.744089,72.2951807 54.4773258,72.8983434 C53.6770365,74.7748494 54.5440166,76.9194277 56.3446678,77.7236446 C56.8115032,77.9246988 57.3450295,78.0587349 57.811865,78.0587349 C59.2123714,78.0587349 60.5461871,77.2545181 61.1464041,75.8471386 C61.2130949,75.7131024 65.7480681,65.5263554 77.418955,64.8561747 L77.418955,83.8222892 C76.9521195,87.9103916 75.0180868,91.127259 71.6168569,93.5399096 C68.0822455,96.0195783 63.3471999,97.2929217 57.5451018,97.2929217 C50.6092605,97.2929217 44.940544,94.8802711 40.7390247,90.121988 C36.4708146,85.3637048 34.3367095,78.5948795 34.3367095,69.8825301 L34.4034003,48.9728916 C34.7368542,41.2658133 36.8042685,35.1671687 40.7390247,30.810994 C45.0072347,26.0527108 50.6092605,23.6400602 57.5451018,23.6400602 C63.3471999,23.6400602 68.0822455,24.9134036 71.6168569,27.3930723 C75.1514684,29.872741 77.1521919,33.2906627 77.4856458,37.7138554 C77.4856458,37.8478916 77.4856458,38.0489458 77.4856458,38.1829819 C77.4856458,40.7296687 79.5530601,42.8072289 82.0873098,42.8072289 C84.6215595,42.8072289 86.6889738,40.7296687 86.6889738,38.1829819 C86.6889738,38.0489458 86.6889738,37.8478916 86.6889738,37.7138554 C86.022066,31.0790663 83.0209807,25.8516566 77.6190274,21.8975904 C72.217074,17.9435241 65.481305,16 57.3450295,16 C47.674866,16 39.8720445,19.2168675 33.9365648,25.5835843 C28.3345391,31.5481928 25.4001447,39.3893072 25.0666908,49.0399096 C25.0666908,49.7100904 25,50.3802711 25,51.0504518 L25.0666908,69.8825301 L25,69.8825301 C25,80.5384036 28.0010852,89.0496988 33.9365648,95.4164157 C39.8720445,101.783133 47.674866,105 57.3450295,105 C65.481305,105 72.217074,103.056476 77.6190274,99.1024096 C82.5541453,95.4834337 85.4885397,90.7251506 86.4889014,84.8275602 L86.6889738,63.7838855 C92.757835,62.309488 101.027492,58.9585843 106.229373,51.0504518 C107.563189,49.375 107.096353,47.0963855 105.362393,45.9570783 Z",
                                stroke: "#FFFFFF",
                                fill: "#FFFFFF",
                            })
                        ),
                    });
                const a = window.wp.i18n,
                    n = window.wp.blockEditor,
                    r = window.wp.data,
                    s = () => "1" === wpBootsBlocks.isBoots5Active,
                    c = () => "1" === wpBootsBlocks.isCssGridEnabled;
                let i = [
                    { label: (0, a.__)("Small", "boot-blocks"), value: "mb-2" },
                    { label: (0, a.__)("Medium", "boot-blocks"), value: "mb-3" },
                    { label: (0, a.__)("Large", "boot-blocks"), value: "mb-5" },
                ];
                (i = (0, e.applyFilters)("wpBootsBlocks.container.marginAfterOptions", i)), (i = [{ label: (0, a.__)("None", "boot-blocks"), value: "mb-0" }, ...i]);
                let p = [
                    { label: (0, a.__)("Xl", "boot-blocks"), value: "xl" },
                    { label: (0, a.__)("Lg", "boot-blocks"), value: "lg" },
                    { label: (0, a.__)("Md", "boot-blocks"), value: "md" },
                    { label: (0, a.__)("Sm", "boot-blocks"), value: "sm" },
                ];
                s() && (p = [{ label: (0, a.__)("Xxl", "boot-blocks"), value: "xxl" }, ...p]), (p = [{ label: (0, a.__)("No breakpoint selected", "boot-blocks"), value: "" }, ...p]);
                const b = (0, t.createElement)(l.SVG, { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" }, (0, t.createElement)(l.Path, { d: "M16.4 4.2H7.6v1.5h8.9V4.2zM4 11.2v1.5h16v-1.5H4zm3.6 8.6h8.9v-1.5H7.6v1.5z" })),
                    m = (0, t.createElement)(l.SVG, { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" }, (0, t.createElement)(l.Path, { d: "M4 19.8h8.9v-1.5H4v1.5zm8.9-15.6H4v1.5h8.9V4.2zm-8.9 7v1.5h16v-1.5H4z" })),
                    u = (0, t.createElement)(l.SVG, { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" }, (0, t.createElement)(l.Path, { d: "M11.1 19.8H20v-1.5h-8.9v1.5zm0-15.6v1.5H20V4.2h-8.9zM4 12.8h16v-1.5H4v1.5z" })),
                    w = (0, t.createElement)(l.SVG, { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" }, (0, t.createElement)(l.Path, { d: "M15 4H9v11h6V4zM4 18.5V20h16v-1.5H4z" })),
                    d = (0, t.createElement)(l.SVG, { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" }, (0, t.createElement)(l.Path, { d: "M20 11h-5V4H9v7H4v1.5h5V20h6v-7.5h5z" })),
                    k = (0, t.createElement)(l.SVG, { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" }, (0, t.createElement)(l.Path, { d: "M9 20h6V9H9v11zM4 4v1.5h16V4H4z" })),
                    h = (0, t.createElement)(
                        l.SVG,
                        { width: "48", height: "48", viewBox: "0 0 48 48", xmlns: "http://www.w3.org/2000/svg" },
                        (0, t.createElement)(l.Path, {
                            fillRule: "evenodd",
                            clipRule: "evenodd",
                            d:
                                "M23.58 26.28c0-.600003.1499985-1.099998.45-1.5.3000015-.400002.7433304-.8399976 1.33-1.32.5600028-.4533356.9833319-.8699981 1.27-1.25s.43-.8433306.43-1.39c0-.5466694-.1733316-1.0566643-.52-1.53s-.986662-.71-1.92-.71c-1.1066722 0-1.8533314.2766639-2.24.83-.3866686.5533361-.58 1.1766632-.58 1.87 0 .1466674.0033333.2666662.01.36.0066667.0933338.01.1533332.01.18h-1.78c-.0133334-.0533336-.0266666-.146666-.04-.28-.0133334-.133334-.02-.2733326-.02-.42 0-.7733372.1766649-1.4666636.53-2.08.3533351-.6133364.8899964-1.0999982 1.61-1.46.7200036-.3600018 1.5999948-.54 2.64-.54 1.2133394 0 2.2033295.3233301 2.97.97s1.15 1.5099946 1.15 2.59c0 .7066702-.1033323 1.3033309-.31 1.79-.2066677.4866691-.4533319.8799985-.74 1.18-.2866681.3000015-.6566644.6233316-1.11.97-.4800024.3866686-.8333322.7166653-1.06.99-.2266678.2733347-.34.6233312-.34 1.05v.82h-1.74zm-.14 2.56h2V31h-2zM39 12c1.1046 0 2 .8954 2 2v20c0 1.1046-.8954 2-2 2H9c-1.10457 0-2-.8954-2-2V14c0-1.1046.89543-2 2-2h30zm0 22V14H9v20h30z",
                        })
                    ),
                    g = (0, t.createElement)(
                        l.SVG,
                        { viewBox: "0 0 24 24", xmlns: "http://www.w3.org/2000/svg" },
                        (0, t.createElement)(l.Path, { d: "M19 6.5H5c-1.1 0-2 .9-2 2v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7c0-1.1-.9-2-2-2zm.5 9c0 .3-.2.5-.5.5H5c-.3 0-.5-.2-.5-.5v-7c0-.3.2-.5.5-.5h14c.3 0 .5.2.5.5v7zM8 12.8h8v-1.5H8v1.5z" })
                    ),
                    _ = (0, t.createElement)(
                        l.SVG,
                        { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" },
                        (0, t.createElement)(l.Path, { d: "M19 6H6c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM6 17.5c-.3 0-.5-.2-.5-.5V8c0-.3.2-.5.5-.5h3v10H6zm13.5-.5c0 .3-.2.5-.5.5h-3v-10h3c.3 0 .5.2.5.5v9z" })
                    ),
                    v = (0, t.createElement)(
                        l.SVG,
                        { viewBox: "0 0 24 24", xmlns: "http://www.w3.org/2000/svg" },
                        (0, t.createElement)(l.Path, {
                            d: "M19 6H6c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-4.1 1.5v10H10v-10h4.9zM5.5 17V8c0-.3.2-.5.5-.5h2.5v10H6c-.3 0-.5-.2-.5-.5zm14 0c0 .3-.2.5-.5.5h-2.6v-10H19c.3 0 .5.2.5.5v9z",
                        })
                    ),
                    C = (0, t.createElement)(
                        l.SVG,
                        { xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" },
                        (0, t.createElement)(l.Path, {
                            d: "M16 4v5.2c0 .3-.2.5-.5.5h-7c-.3.1-.5-.2-.5-.5V4H6.5v5.2c0 1.1.9 2 2 2h7c1.1 0 2-.9 2-2V4H16zm-.5 8.8h-7c-1.1 0-2 .9-2 2V20H8v-5.2c0-.3.2-.5.5-.5h7c.3 0 .5.2.5.5V20h1.5v-5.2c0-1.2-.9-2-2-2z",
                        })
                    );
                (0, o.registerBlockType)("boot-blocks/container", {
                    title: (0, a.__)("Container (Boots)", "boot-blocks"),
                    icon: C,
                    category: "boot-blocks",
                    keywords: [(0, a.__)("Container", "boot-blocks"), (0, a.__)("Boots Container", "boot-blocks"), (0, a.__)("Boots", "boot-blocks")],
                    supports: { align: !1 },
                    edit: ({ attributes: e, className: o, clientId: s, setAttributes: c }) => {
                        const { isFluid: b, fluidBreakpoint: m, marginAfter: u } = e,
                            { hasChildBlocks: w } = (0, r.useSelect)((e) => {
                                const { getBlockOrder: t } = e("core/block-editor");
                                return { hasChildBlocks: t(s).length > 0 };
                            });
                        return (0, t.createElement)(
                            t.Fragment,
                            null,
                            (0, t.createElement)(
                                n.InspectorControls,
                                null,
                                (0, t.createElement)(
                                    l.PanelBody,
                                    { title: (0, a.__)("Fluid", "boot-blocks") },
                                    (0, t.createElement)(l.CheckboxControl, {
                                        label: (0, a.__)("Fluid", "boot-blocks"),
                                        checked: b,
                                        onChange: (e) => {
                                            c({ isFluid: e });
                                        },
                                    }),
                                    (0, t.createElement)(l.SelectControl, {
                                        label: (0, a.__)("Fluid Breakpoint", "boot-blocks"),
                                        disabled: !b,
                                        value: m,
                                        options: p,
                                        onChange: (e) => {
                                            c({ fluidBreakpoint: e });
                                        },
                                        help: (0, a.__)(
                                            "Fluid breakpoints only work with Boots v4.4+. The container will be 100% wide until the specified breakpoint is reached, after which max-widths for each of the higher breakpoints will be applied.",
                                            "boot-blocks"
                                        ),
                                    })
                                ),
                                (0, t.createElement)(
                                    l.PanelBody,
                                    { title: (0, a.__)("Margin", "boot-blocks") },
                                    (0, t.createElement)(l.SelectControl, {
                                        label: (0, a.__)("Margin After", "boot-blocks"),
                                        value: u,
                                        options: i,
                                        onChange: (e) => {
                                            c({ marginAfter: e });
                                        },
                                    })
                                )
                            ),
                            (0, t.createElement)("div", { className: o }, (0, t.createElement)(n.InnerBlocks, { renderAppender: w ? void 0 : () => (0, t.createElement)(n.InnerBlocks.ButtonBlockAppender, null) }))
                        );
                    },
                    save: () => (0, t.createElement)(n.InnerBlocks.Content, null),
                });
                const B = "#007bff",
                    E = "#6c757d",
                    x = "#ffffff",
                    f = [
                        { icon: k, title: (0, a.__)("Align content top", "boot-blocks"), align: "top" },
                        { icon: d, title: (0, a.__)("Align content center", "boot-blocks"), align: "center" },
                        { icon: w, title: (0, a.__)("Align content bottom", "boot-blocks"), align: "bottom" },
                    ],
                    z = ({ label: e, attributeName: o, value: a, setAttributes: n, ...r }) =>
                        (0, t.createElement)(l.RangeControl, {
                            label: e,
                            value: a,
                            onChange: (e) => {
                                n({ [o]: e });
                            },
                            min: 0,
                            max: 12,
                            ...r,
                        });
                let y = [
                    { name: "primary", color: B },
                    { name: "secondary", color: E },
                ];
                y = (0, e.applyFilters)("wpBootsBlocks.column.bgColorOptions", y);
                let V = [
                    { label: (0, a.__)("None", "boot-blocks"), value: "" },
                    { label: (0, a.__)("Small", "boot-blocks"), value: "p-2" },
                    { label: (0, a.__)("Medium", "boot-blocks"), value: "p-3" },
                    { label: (0, a.__)("Large", "boot-blocks"), value: "p-5" },
                ];
                V = (0, e.applyFilters)("wpBootsBlocks.column.paddingOptions", V);
                (0, o.registerBlockType)("boot-blocks/column", {
                    title: (0, a.__)("Column (Boots)", "boot-blocks"),
                    icon: _,
                    category: "boot-blocks",
                    keywords: [(0, a.__)("Column", "boot-blocks"), (0, a.__)("Boots Column", "boot-blocks"), (0, a.__)("Boots", "boot-blocks")],
                    parent: ["boot-blocks/row"],
                    getEditWrapperProps(e) {
                        const {
                            sizeXxl: t,
                            sizeXl: o,
                            sizeLg: l,
                            sizeMd: a,
                            sizeSm: n,
                            sizeXs: r,
                            equalWidthXxl: s,
                            equalWidthXl: c,
                            equalWidthLg: i,
                            equalWidthMd: p,
                            equalWidthSm: b,
                            equalWidthXs: m,
                            bgColor: u,
                            padding: w,
                            contentVerticalAlignment: d,
                        } = e;
                        let k = {};
                        if (u) {
                            const e = y.find((e) => e.name === u);
                            e && (k = { backgroundColor: e.color });
                        }
                        return {
                            "data-size-xs": s || c || i || p || b || m ? 0 : r,
                            "data-size-sm": s || c || i || p || b ? 0 : n,
                            "data-size-md": s || c || i || p ? 0 : a,
                            "data-size-lg": s || c || i ? 0 : l,
                            "data-size-xl": s || c ? 0 : o,
                            "data-size-xxl": s ? 0 : t,
                            "data-bg-color": u,
                            "data-padding": w,
                            "data-content-vertical-alignment": d,
                            style: k,
                        };
                    },
                    edit: ({ attributes: e, className: o, clientId: i, setAttributes: p }) => {
                        const { hasChildBlocks: b } = (0, r.useSelect)((e) => {
                                const { getBlockOrder: t } = e("core/block-editor");
                                return { hasChildBlocks: t(i).length > 0 };
                            }),
                            {
                                sizeXxl: m,
                                sizeXl: u,
                                sizeLg: w,
                                sizeMd: d,
                                sizeSm: k,
                                sizeXs: h,
                                equalWidthXxl: g,
                                equalWidthXl: _,
                                equalWidthLg: v,
                                equalWidthMd: C,
                                equalWidthSm: B,
                                equalWidthXs: E,
                                bgColor: x,
                                padding: M,
                                centerContent: H,
                                contentVerticalAlignment: S,
                            } = e;
                        return (
                            H && p({ contentVerticalAlignment: "center", centerContent: !1 }),
                            (0, t.createElement)(
                                t.Fragment,
                                null,
                                (0, t.createElement)(
                                    n.InspectorControls,
                                    null,
                                    (0, t.createElement)(
                                        l.PanelBody,
                                        { title: (0, a.__)("Column size", "boot-blocks"), initialOpen: !1 },
                                        (0, t.createElement)(z, { label: (0, a.__)("Xs Column count", "boot-blocks"), attributeName: "sizeXs", value: h, disabled: E, setAttributes: p }),
                                        !c() && (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("Xs equal-width", "boot-blocks"), checked: E, onChange: (e) => p({ equalWidthXs: e }) }),
                                        (0, t.createElement)("hr", null),
                                        (0, t.createElement)(z, { label: (0, a.__)("Sm Column count", "boot-blocks"), attributeName: "sizeSm", value: k, disabled: B, setAttributes: p }),
                                        !c() && (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("Sm equal-width", "boot-blocks"), checked: B, onChange: (e) => p({ equalWidthSm: e }) }),
                                        (0, t.createElement)("hr", null),
                                        (0, t.createElement)(z, { label: (0, a.__)("Md Column count", "boot-blocks"), attributeName: "sizeMd", value: d, disabled: C, setAttributes: p }),
                                        !c() && (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("Md equal-width", "boot-blocks"), checked: C, onChange: (e) => p({ equalWidthMd: e }) }),
                                        (0, t.createElement)("hr", null),
                                        (0, t.createElement)(z, { label: (0, a.__)("Lg Column count", "boot-blocks"), attributeName: "sizeLg", value: w, disabled: v, setAttributes: p }),
                                        !c() && (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("Lg equal-width", "boot-blocks"), checked: v, onChange: (e) => p({ equalWidthLg: e }) }),
                                        (0, t.createElement)("hr", null),
                                        (0, t.createElement)(z, { label: (0, a.__)("Xl Column count", "boot-blocks"), attributeName: "sizeXl", value: u, disabled: _, setAttributes: p }),
                                        !c() && (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("Xl equal-width", "boot-blocks"), checked: _, onChange: (e) => p({ equalWidthXl: e }) }),
                                        s() &&
                                            (0, t.createElement)(
                                                t.Fragment,
                                                null,
                                                (0, t.createElement)("hr", null),
                                                (0, t.createElement)(z, { label: (0, a.__)("Xxl Column count", "boot-blocks"), attributeName: "sizeXxl", value: m, disabled: g, setAttributes: p }),
                                                !c() && (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("Xxl equal-width", "boot-blocks"), checked: g, onChange: (e) => p({ equalWidthXxl: e }) })
                                            )
                                    ),
                                    (0, t.createElement)(
                                        l.PanelBody,
                                        { title: (0, a.__)("Background color", "boot-blocks"), initialOpen: !1 },
                                        (0, t.createElement)(l.ColorPalette, {
                                            colors: y,
                                            value: x,
                                            onChange: (e) => {
                                                if (e) {
                                                    const t = y.find((t) => t.color === e);
                                                    t && p({ bgColor: t.name });
                                                } else p({ bgColor: "", centerContent: !1 });
                                            },
                                            disableCustomColors: !0,
                                        })
                                    ),
                                    (0, t.createElement)(
                                        l.PanelBody,
                                        { title: (0, a.__)("Padding (inside column)", "boot-blocks"), initialOpen: !1 },
                                        (0, t.createElement)(l.SelectControl, {
                                            label: (0, a.__)("Size", "boot-blocks"),
                                            value: M,
                                            options: V,
                                            onChange: (e) => {
                                                p({ padding: e });
                                            },
                                        })
                                    )
                                ),
                                (0, t.createElement)(
                                    n.BlockControls,
                                    null,
                                    (0, t.createElement)(n.AlignmentToolbar, {
                                        value: S,
                                        label: (0, a.__)("Change vertical alignment of content", "boot-blocks"),
                                        onChange: (e) => p({ contentVerticalAlignment: e }),
                                        alignmentControls: f,
                                    })
                                ),
                                (0, t.createElement)("div", { className: o }, (0, t.createElement)(n.InnerBlocks, { templateLock: !1, renderAppender: b ? void 0 : () => (0, t.createElement)(n.InnerBlocks.ButtonBlockAppender, null) }))
                            )
                        );
                    },
                    save: () => (0, t.createElement)(n.InnerBlocks.Content, null),
                });
                const M = "custom",
                    H = ["boot-blocks/column"];
                let S = [
                    {
                        name: "1-1",
                        title: (0, a.__)("2 Columns (1:1)", "boot-blocks"),
                        icon: (0, t.createElement)(
                            l.SVG,
                            { width: "48", height: "48", viewBox: "0 0 48 48", xmlns: "http://www.w3.org/2000/svg" },
                            (0, t.createElement)(l.Path, {
                                fillRule: "evenodd",
                                clipRule: "evenodd",
                                d: "M39 12C40.1046 12 41 12.8954 41 14V34C41 35.1046 40.1046 36 39 36H9C7.89543 36 7 35.1046 7 34V14C7 12.8954 7.89543 12 9 12H39ZM39 34V14H25V34H39ZM23 34H9V14H23V34Z",
                            })
                        ),
                        templateLock: "all",
                        template: [
                            ["boot-blocks/column", { sizeMd: 6 }],
                            ["boot-blocks/column", { sizeMd: 6 }],
                        ],
                    },
                    {
                        name: "1-2",
                        title: (0, a.__)("2 Columns (1:2)", "boot-blocks"),
                        icon: (0, t.createElement)(
                            l.SVG,
                            { width: "48", height: "48", viewBox: "0 0 48 48", xmlns: "http://www.w3.org/2000/svg" },
                            (0, t.createElement)(l.Path, {
                                fillRule: "evenodd",
                                clipRule: "evenodd",
                                d: "M39 12C40.1046 12 41 12.8954 41 14V34C41 35.1046 40.1046 36 39 36H9C7.89543 36 7 35.1046 7 34V14C7 12.8954 7.89543 12 9 12H39ZM39 34V14H20V34H39ZM18 34H9V14H18V34Z",
                            })
                        ),
                        templateLock: "all",
                        template: [
                            ["boot-blocks/column", { sizeMd: 4 }],
                            ["boot-blocks/column", { sizeMd: 8 }],
                        ],
                    },
                    {
                        name: "2-1",
                        title: (0, a.__)("2 Columns (2:1)", "boot-blocks"),
                        icon: (0, t.createElement)(
                            l.SVG,
                            { width: "48", height: "48", viewBox: "0 0 48 48", xmlns: "http://www.w3.org/2000/svg" },
                            (0, t.createElement)(l.Path, {
                                fillRule: "evenodd",
                                clipRule: "evenodd",
                                d: "M39 12C40.1046 12 41 12.8954 41 14V34C41 35.1046 40.1046 36 39 36H9C7.89543 36 7 35.1046 7 34V14C7 12.8954 7.89543 12 9 12H39ZM39 34V14H30V34H39ZM28 34H9V14H28V34Z",
                            })
                        ),
                        templateLock: "all",
                        template: [
                            ["boot-blocks/column", { sizeMd: 8 }],
                            ["boot-blocks/column", { sizeMd: 4 }],
                        ],
                    },
                    {
                        name: "1-1-1",
                        title: (0, a.__)("3 Columns (1:1:1)", "boot-blocks"),
                        icon: (0, t.createElement)(
                            l.SVG,
                            { width: "48", height: "48", viewBox: "0 0 48 48", xmlns: "http://www.w3.org/2000/svg" },
                            (0, t.createElement)(l.Path, { fillRule: "evenodd", d: "M41 14a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h30a2 2 0 0 0 2-2V14zM28.5 34h-9V14h9v20zm2 0V14H39v20h-8.5zm-13 0H9V14h8.5v20z" })
                        ),
                        templateLock: "all",
                        template: [
                            ["boot-blocks/column", { sizeMd: 4 }],
                            ["boot-blocks/column", { sizeMd: 4 }],
                            ["boot-blocks/column", { sizeMd: 4 }],
                        ],
                    },
                ];
                (S = (0, e.applyFilters)("wpBootsBlocks.row.templates", S)), (S = ((e) => e.map((e) => ({ icon: h, ...e })))(S));
                const A = (0, e.applyFilters)("wpBootsBlocks.row.enableCustomTemplate", !0);
                A && S.push({ name: M, title: (0, a.__)("Custom", "boot-blocks"), icon: h, templateLock: !1, template: [["boot-blocks/column"]] });
                let F = [
                    { label: (0, a.__)("None", "boot-blocks"), value: "gx-0" },
                    { label: (0, a.__)("Small", "boot-blocks"), value: "gx-3" },
                    { label: (0, a.__)("Large", "boot-blocks"), value: "gx-5" },
                ];
                (F = (0, e.applyFilters)("wpBootsBlocks.row.horizontalGuttersOptions", F)), (F = [{ label: (0, a.__)("Boots Default (Medium)", "boot-blocks"), value: "" }, ...F]);
                let P = [
                    { label: (0, a.__)("Small", "boot-blocks"), value: "gy-3" },
                    { label: (0, a.__)("Medium", "boot-blocks"), value: "gy-4" },
                    { label: (0, a.__)("Large", "boot-blocks"), value: "gy-5" },
                ];
                (P = (0, e.applyFilters)("wpBootsBlocks.row.verticalGuttersOptions", P)), (P = [{ label: (0, a.__)("Boots Default (None)", "boot-blocks"), value: "" }, ...P]);
                let G = [
                    { label: (0, a.__)("Small", "boot-blocks"), value: "1rem" },
                    { label: (0, a.__)("Large", "boot-blocks"), value: "2rem" },
                ];
                (G = (0, e.applyFilters)("wpBootsBlocks.row.cssGridGuttersOptions", G)), (G = [{ label: (0, a.__)("Boots Default (Medium)", "boot-blocks"), value: "" }, ...G]);
                const O = (e) => {
                        const t = S.find((t) => t.name === e);
                        return t ? t.template : [];
                    },
                    L = (e) => {
                        const t = S.find((t) => t.name === e);
                        return !!t && t.templateLock;
                    },
                    N =
                        A && o.createBlocksFromInnerBlocksTemplate
                            ? {
                                  from: [
                                      {
                                          type: "block",
                                          isMultiBlock: !0,
                                          blocks: ["*"],
                                          __experimentalConvert: (e) => {
                                              const t = Math.max(Math.round(12 / e.length), 3),
                                                  l = e.map(({ name: e, attributes: o, innerBlocks: l }) => ["boot-blocks/column", { sizeMd: t }, [[e, { ...o }, l]]]);
                                              return (0, o.createBlock)("boot-blocks/row", { template: M }, (0, o.createBlocksFromInnerBlocksTemplate)(l));
                                          },
                                      },
                                  ],
                              }
                            : {};
                (0, o.registerBlockType)("boot-blocks/row", {
                    title: (0, a.__)("Row (Boots)", "boot-blocks"),
                    icon: v,
                    category: "boot-blocks",
                    keywords: [(0, a.__)("Row", "boot-blocks"), (0, a.__)("Boots Row", "boot-blocks"), (0, a.__)("Boots", "boot-blocks")],
                    supports: { align: ["full"] },
                    transforms: N,
                    getEditWrapperProps: (e) => ({
                        "data-alignment": e.alignment,
                        "data-vertical-alignment": e.verticalAlignment,
                        "data-editor-stack-columns": e.editorStackColumns,
                        "data-no-gutters": e.noGutters,
                        "data-horizontal-gutters": e.horizontalGutters,
                    }),
                    edit: ({ className: e, clientId: o, attributes: i, setAttributes: p }) => {
                        const { template: h, noGutters: g, alignment: _, verticalAlignment: v, editorStackColumns: C, horizontalGutters: B, verticalGutters: E, cssGridGutters: x } = i,
                            { columns: f } = (0, r.useSelect)((e) => {
                                const { getBlocksByClientId: t } = e("core/block-editor");
                                return { columns: t(o)[0] ? t(o)[0].innerBlocks : [] };
                            }),
                            { updateBlockAttributes: z } = (0, r.useDispatch)("core/block-editor"),
                            y = [
                                { icon: m, title: (0, a.__)("Align columns left", "boot-blocks"), align: "left" },
                                { icon: b, title: (0, a.__)("Align columns center", "boot-blocks"), align: "center" },
                                { icon: u, title: (0, a.__)("Align columns right", "boot-blocks"), align: "right" },
                            ],
                            V = [
                                { icon: k, title: (0, a.__)("Align columns top", "boot-blocks"), align: "top" },
                                { icon: d, title: (0, a.__)("Align columns center", "boot-blocks"), align: "center" },
                                { icon: w, title: (0, a.__)("Align columns bottom", "boot-blocks"), align: "bottom" },
                            ];
                        return (0, t.createElement)(
                            t.Fragment,
                            null,
                            (0, t.createElement)(
                                n.InspectorControls,
                                null,
                                (0, t.createElement)(
                                    l.PanelBody,
                                    null,
                                    (0, t.createElement)(l.CheckboxControl, {
                                        label: (0, a.__)("Editor: Display columns stacked", "boot-blocks"),
                                        description: (0, a.__)(
                                            "Displays stacked columns in editor to enhance readability of block content. This option is only used in the editor and won't affect the output of the row.",
                                            "boot-blocks"
                                        ),
                                        checked: C,
                                        onChange: (e) => p({ editorStackColumns: e }),
                                    })
                                ),
                                (0, t.createElement)(
                                    l.PanelBody,
                                    { title: (0, a.__)("Change layout", "boot-blocks") },
                                    (0, t.createElement)(
                                        "ul",
                                        { className: "boot-blocks-template-selector-list" },
                                        S.map((e, o) =>
                                            (0, t.createElement)(
                                                "li",
                                                { className: "boot-blocks-template-selector-button", key: o },
                                                (0, t.createElement)(
                                                    l.Button,
                                                    {
                                                        label: e.title,
                                                        icon: e.icon,
                                                        onClick: () => {
                                                            ((e) => {
                                                                const t = S.find((t) => t.name === e);
                                                                t &&
                                                                    (f.forEach((e, o) => {
                                                                        if (t.template.length > o) {
                                                                            const l = t.template[o][1];
                                                                            z(e.clientId, l);
                                                                        }
                                                                    }),
                                                                    p({ template: e }));
                                                            })(e.name);
                                                        },
                                                        className: h === e.name ? "is-active" : null,
                                                    },
                                                    (0, t.createElement)("div", { className: "boot-blocks-template-selector-button-label" }, e.title)
                                                )
                                            )
                                        )
                                    )
                                ),
                                (0, t.createElement)(
                                    l.PanelBody,
                                    { title: (0, a.__)("Row options", "boot-blocks") },
                                    (0, t.createElement)(l.CheckboxControl, { label: (0, a.__)("No Gutters", "boot-blocks"), checked: g, onChange: (e) => p({ noGutters: e }) }),
                                    !g &&
                                        (c()
                                            ? (0, t.createElement)(l.SelectControl, {
                                                  label: (0, a.__)("Gutters", "boot-blocks"),
                                                  value: x,
                                                  options: G,
                                                  onChange: (e) => {
                                                      p({ cssGridGutters: e });
                                                  },
                                              })
                                            : s() &&
                                              (0, t.createElement)(
                                                  t.Fragment,
                                                  null,
                                                  (0, t.createElement)(l.SelectControl, {
                                                      label: (0, a.__)("Horizontal Gutters", "boot-blocks"),
                                                      value: B,
                                                      options: F,
                                                      onChange: (e) => {
                                                          p({ horizontalGutters: e });
                                                      },
                                                  }),
                                                  (0, t.createElement)(l.SelectControl, {
                                                      label: (0, a.__)("Vertical Gutters", "boot-blocks"),
                                                      value: E,
                                                      options: P,
                                                      onChange: (e) => {
                                                          p({ verticalGutters: e });
                                                      },
                                                  })
                                              ))
                                )
                            ),
                            (0, t.createElement)(
                                n.BlockControls,
                                null,
                                !c() &&
                                    (0, t.createElement)(
                                        t.Fragment,
                                        null,
                                        (0, t.createElement)(n.AlignmentToolbar, { value: _, label: (0, a.__)("Change horizontal alignment of columns", "boot-blocks"), onChange: (e) => p({ alignment: e }), alignmentControls: y }),
                                        (0, t.createElement)(n.AlignmentToolbar, {
                                            value: v,
                                            label: (0, a.__)("Change vertical alignment of columns", "boot-blocks"),
                                            onChange: (e) => p({ verticalAlignment: e }),
                                            alignmentControls: V,
                                        })
                                    )
                            ),
                            (0, t.createElement)("div", { className: e }, (0, t.createElement)(n.InnerBlocks, { allowedBlocks: H, template: O(h), templateLock: L(h), orientation: "horizontal" }))
                        );
                    },
                    save: () => (0, t.createElement)(n.InnerBlocks.Content, null),
                });
                let X = [
                    { label: (0, a.__)("Primary", "boot-blocks"), value: "primary", bgColor: B, textColor: x },
                    { label: (0, a.__)("Secondary", "boot-blocks"), value: "secondary", bgColor: E, textColor: x },
                ];
                X = (0, e.applyFilters)("wpBootsBlocks.button.styleOptions", X);
                const q = B,
                    T = x,
                    W = "noreferrer noopener";
                (0, o.registerBlockType)("boot-blocks/button", {
                    title: (0, a.__)("Button (Boots)", "boot-blocks"),
                    icon: g,
                    category: "boot-blocks",
                    keywords: [(0, a.__)("Button", "boot-blocks"), (0, a.__)("Boots Button", "boot-blocks"), (0, a.__)("Boots", "boot-blocks")],
                    example: {},
                    getEditWrapperProps(e) {
                        const { alignment: t, style: o } = e;
                        return { "data-alignment": t, "data-style": o };
                    },
                    edit: ({ attributes: e, className: o, isSelected: r, setAttributes: s }) => {
                        const { url: c, linkTarget: i, rel: p, text: b, style: m, alignment: u } = e;
                        let w = !1;
                        const d = X.map((e) => (e.color && (w = !0), { ...e, textColor: e.textColor || T, bgColor: e.bgColor || e.color || q }));
                        w && console.warn("[wpBootsBlocks.button.styleOptions filter] The color attribute in styleOptions is deprecated. Please us bgColor and textColor instead.");
                        let k = { backgroundColor: d.length > 0 ? d[0].bgColor : q, color: d.length > 0 ? d[0].textColor : T };
                        if (m) {
                            const e = d.find((e) => e.value === m);
                            e?.bgColor && e?.textColor && (k = { backgroundColor: e.bgColor, color: e.textColor });
                        }
                        return (0, t.createElement)(
                            t.Fragment,
                            null,
                            (0, t.createElement)(
                                "div",
                                { className: o, "data-alignment": u, style: k },
                                (0, t.createElement)(n.RichText, { placeholder: (0, a.__)("Add text...", "boot-blocks"), value: b, onChange: (e) => s({ text: e }), allowedFormats: [], keepPlaceholderOnFocus: !0 }),
                                (0, t.createElement)(
                                    n.InspectorControls,
                                    null,
                                    (0, t.createElement)(
                                        l.PanelBody,
                                        null,
                                        (0, t.createElement)(l.SelectControl, {
                                            label: (0, a.__)("Style", "boot-blocks"),
                                            value: m,
                                            options: X,
                                            onChange: (e) => {
                                                s({ style: e });
                                            },
                                        })
                                    ),
                                    (0, t.createElement)(
                                        l.PanelBody,
                                        { title: (0, a.__)("Link settings", "boot-blocks") },
                                        (0, t.createElement)(l.ToggleControl, {
                                            label: (0, a.__)("Open in new tab", "boot-blocks"),
                                            onChange: (e) => {
                                                const t = e ? "_blank" : void 0;
                                                let o = p;
                                                t && !p ? (o = W) : t || p !== W || (o = void 0), s({ linkTarget: t, rel: o });
                                            },
                                            checked: "_blank" === i,
                                        }),
                                        (0, t.createElement)(l.TextControl, {
                                            label: (0, a.__)("Link rel", "boot-blocks"),
                                            value: p || "",
                                            onChange: (e) => {
                                                s({ rel: e });
                                            },
                                        })
                                    )
                                ),
                                (0, t.createElement)(n.BlockControls, null, (0, t.createElement)(n.AlignmentToolbar, { value: u, label: (0, a.__)("Change button alignment", "boot-blocks"), onChange: (e) => s({ alignment: e }) }))
                            ),
                            r &&
                                (0, t.createElement)(
                                    "form",
                                    { className: "wp-block-boot-blocks-button-link", onSubmit: (e) => e.preventDefault() },
                                    (0, t.createElement)(l.Dashicon, { icon: "admin-links" }),
                                    (0, t.createElement)(n.URLInput, { value: c, onChange: (e) => s({ url: e }) }),
                                    (0, t.createElement)(l.Button, { icon: "editor-break", label: (0, a.__)("Apply", "boot-blocks"), type: "submit" })
                                )
                        );
                    },
                    save: () => null,
                });
            },
        },
        o = {};
    function l(e) {
        var a = o[e];
        if (void 0 !== a) return a.exports;
        var n = (o[e] = { exports: {} });
        return t[e](n, n.exports, l), n.exports;
    }
    (l.m = t),
        (e = []),
        (l.O = (t, o, a, n) => {
            if (!o) {
                var r = 1 / 0;
                for (p = 0; p < e.length; p++) {
                    for (var [o, a, n] = e[p], s = !0, c = 0; c < o.length; c++) (!1 & n || r >= n) && Object.keys(l.O).every((e) => l.O[e](o[c])) ? o.splice(c--, 1) : ((s = !1), n < r && (r = n));
                    if (s) {
                        e.splice(p--, 1);
                        var i = a();
                        void 0 !== i && (t = i);
                    }
                }
                return t;
            }
            n = n || 0;
            for (var p = e.length; p > 0 && e[p - 1][2] > n; p--) e[p] = e[p - 1];
            e[p] = [o, a, n];
        }),
        (l.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)),
        (() => {
            var e = { 826: 0, 431: 0 };
            l.O.j = (t) => 0 === e[t];
            var t = (t, o) => {
                    var a,
                        n,
                        [r, s, c] = o,
                        i = 0;
                    if (r.some((t) => 0 !== e[t])) {
                        for (a in s) l.o(s, a) && (l.m[a] = s[a]);
                        if (c) var p = c(l);
                    }
                    for (t && t(o); i < r.length; i++) (n = r[i]), l.o(e, n) && e[n] && e[n][0](), (e[n] = 0);
                    return l.O(p);
                },
                o = (globalThis.webpackChunkwp_bootstrap_blocks = globalThis.webpackChunkwp_bootstrap_blocks || []);
            o.forEach(t.bind(null, 0)), (o.push = t.bind(null, o.push.bind(o)));
        })();
    var a = l.O(void 0, [431], () => l(379));
    a = l.O(a);
})();
