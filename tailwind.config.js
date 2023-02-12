const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");
const Color = require("color");
const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        themeVariants: ["dark"],
        Forms: (theme) => ({
            default: {
                "input, textarea": {
                    "&::placeholder": {
                        color: theme("colors.gray.400"),
                    },
                },
            },
        }),

        extend: {
            colors: {
                slate: {
                    1000: "#0a101f",
                },
                gray: {
                    1000: "#080c14",
                },
                zinc: {
                    1000: "#101012",
                },
                neutral: {
                    1000: "#080808",
                },
                stone: {
                    1000: "#0f0d0c",
                },
                muted: {
                    ...colors.slate,
                    1000: "#0a101f",
                },
                primary: colors.violet,
                info: colors.sky,
                success: colors.teal,
                warning: colors.amber,
                danger: colors.rose,
                transparent: "transparent",
                white: "#ffffff",
                black: "#000000",
                gray: {
                    50: "#f9fafb",
                    100: "#f4f5f7",
                    200: "#e5e7eb",
                    300: "#d5d6d7",
                    400: "#9e9e9e",
                    500: "#707275",
                    600: "#4c4f52",
                    700: "#24262d",
                    800: "#1a1c23",
                    900: "#121317",
                },
                "cool-gray": {
                    50: "#fbfdfe",
                    100: "#f1f5f9",
                    200: "#e2e8f0",
                    300: "#cfd8e3",
                    400: "#97a6ba",
                    500: "#64748b",
                    600: "#475569",
                    700: "#364152",
                    800: "#27303f",
                    900: "#1a202e",
                },
                red: {
                    50: "#fdf2f2",
                    100: "#fde8e8",
                    200: "#fbd5d5",
                    300: "#f8b4b4",
                    400: "#f98080",
                    500: "#f05252",
                    600: "#e02424",
                    700: "#c81e1e",
                    800: "#9b1c1c",
                    900: "#771d1d",
                },
                orange: {
                    50: "#fff8f1",
                    100: "#feecdc",
                    200: "#fcd9bd",
                    300: "#fdba8c",
                    400: "#ff8a4c",
                    500: "#ff5a1f",
                    600: "#d03801",
                    700: "#b43403",
                    800: "#8a2c0d",
                    900: "#771d1d",
                },
                yellow: {
                    50: "#fdfdea",
                    100: "#fdf6b2",
                    200: "#fce96a",
                    300: "#faca15",
                    400: "#e3a008",
                    500: "#c27803",
                    600: "#9f580a",
                    700: "#8e4b10",
                    800: "#723b13",
                    900: "#633112",
                },
                green: {
                    50: "#f3faf7",
                    100: "#def7ec",
                    200: "#bcf0da",
                    300: "#84e1bc",
                    400: "#31c48d",
                    500: "#0e9f6e",
                    600: "#057a55",
                    700: "#046c4e",
                    800: "#03543f",
                    900: "#014737",
                },
                teal: {
                    50: "#edfafa",
                    100: "#d5f5f6",
                    200: "#afecef",
                    300: "#7edce2",
                    400: "#16bdca",
                    500: "#0694a2",
                    600: "#047481",
                    700: "#036672",
                    800: "#05505c",
                    900: "#014451",
                },
                blue: {
                    50: "#ebf5ff",
                    100: "#e1effe",
                    200: "#c3ddfd",
                    300: "#a4cafe",
                    400: "#76a9fa",
                    500: "#3f83f8",
                    600: "#1c64f2",
                    700: "#1a56db",
                    800: "#1e429f",
                    900: "#233876",
                },
                indigo: {
                    50: "#f0f5ff",
                    100: "#e5edff",
                    200: "#cddbfe",
                    300: "#b4c6fc",
                    400: "#8da2fb",
                    500: "#6875f5",
                    600: "#5850ec",
                    700: "#5145cd",
                    800: "#42389d",
                    900: "#362f78",
                },
                purple: {
                    50: "#f6f5ff",
                    100: "#edebfe",
                    200: "#dcd7fe",
                    300: "#cabffd",
                    400: "#ac94fa",
                    500: "#9061f9",
                    600: "#7e3af2",
                    700: "#6c2bd9",
                    800: "#5521b5",
                    900: "#4a1d96",
                },
                pink: {
                    50: "#fdf2f8",
                    100: "#fce8f3",
                    200: "#fad1e8",
                    300: "#f8b4d9",
                    400: "#f17eb8",
                    500: "#e74694",
                    600: "#d61f69",
                    700: "#bf125d",
                    800: "#99154b",
                    900: "#751a3d",
                },
            },
            maxHeight: {
                0: "0",
                xl: "36rem",
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        color: theme("colors.muted.600"),
                        '[class~="lead"]': {
                            color: theme("colors.muted.400"),
                        },
                        h2: {
                            fontFamily: theme("fontFamily.heading"),
                            fontWeight: 700,
                            color: theme("colors.muted.800"),
                        },
                        h3: {
                            fontFamily: theme("fontFamily.heading"),
                            fontWeight: 500,
                            color: theme("colors.muted.800"),
                        },
                        h4: {
                            fontFamily: theme("fontFamily.heading"),
                            fontWeight: 500,
                            fontSize: "1.25em",
                            color: theme("colors.muted.800"),
                        },
                        hr: {
                            borderColor: theme("colors.muted.200"),
                        },
                        li: {
                            fontSize: "1.15rem",
                            color: theme("colors.muted.600"),
                            padding: "0.35rem 0",
                        },
                        strong: {
                            color: theme("colors.muted.800"),
                        },
                        em: {
                            color: theme("colors.muted.500"),
                            fontSize: "1.1rem",
                            lineHeight: 1,
                        },
                        blockquote: {
                            fontSize: "1.1rem",
                            lineHeight: 1.4,
                            fontWeight: 500,
                            color: theme("colors.muted.500"),
                            borderLeftColor: theme("colors.primary.500"),
                            background: theme("colors.muted.100"),
                            padding: "1.75rem",
                        },
                        pre: {
                            fontFamily: theme("fontFamily.mono"),
                        },
                        code: {
                            fontFamily: theme("fontFamily.mono"),
                            background: theme("colors.primary.100"),
                            color: theme("colors.primary.500"),
                            padding: "0.35rem",
                            fontWeight: 600,
                            fontSize: "0.95rem !important",
                        },
                    },
                },
                dark: {
                    css: {
                        color: theme("colors.muted.400"),
                        '[class~="lead"]': {
                            color: theme("colors.muted.300"),
                        },
                        h2: {
                            color: theme("colors.muted.100"),
                        },
                        h3: {
                            color: theme("colors.muted.100"),
                        },
                        h4: {
                            color: theme("colors.muted.100"),
                        },
                        hr: {
                            borderColor: theme("colors.muted.800"),
                        },
                        li: {
                            color: theme("colors.muted.400"),
                        },
                        strong: {
                            color: theme("colors.muted.300"),
                        },
                        em: {
                            color: theme("colors.muted.400"),
                        },
                        blockquote: {
                            color: theme("colors.muted.200"),
                            background: theme("colors.muted.800"),
                        },
                    },
                },
            }),
            keyframes: {
                indeterminate: {
                    "0%": { "margin-left": "-10%" },
                    "100%": { "margin-left": "100%" },
                },
                placeload: {
                    "0%": { "background-position": "-468px 0" },
                    "100%": { "background-position": "468px 0" },
                },
                stroke: {
                    "100%": { "stroke-dashoffset": "0" },
                },
                scale: {
                    0: { transform: "scale(0)", opacity: 0 },
                    "100%": { transform: "scale(1)", opacity: 1 },
                },
            },
            animation: {
                indeterminate:
                    "indeterminate 1s cubic-bezier(0.4, 0, 0.2, 1) infinite",
                placeload: "placeload 1s linear infinite forwards",
                circle: "stroke 1.2s cubic-bezier(0.65, 0, 0.45, 1) forwards",
                check: "stroke 0.9s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards",
                scale: "scale 0.5s linear 0.5s forwards",
            },
        },
    },
    variants: {
        backgroundColor: ["hover", "focus", "active", "odd"],
        display: ["responsive", "dark"],
        textColor: ["focus-within", "hover", "active"],
        placeholderColor: ["focus"],
        borderColor: ["focus", "hover"],
        boxShadow: ["focus"],
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/line-clamp"),
        require("@tailwindcss/aspect-ratio"),
        require("@vidstack/player/tailwind.cjs"),
        plugin(function ({ addUtilities }) {
            addUtilities({
                ".slimscroll::-webkit-scrollbar": {
                    width: "6px",
                },
                ".slimscroll::-webkit-scrollbar-thumb": {
                    borderRadius: ".75rem",
                    background: "rgba(0, 0, 0, 0.1)",
                },
                ".slimscroll-opaque::-webkit-scrollbar-thumb": {
                    background: "rgba(0, 0, 0, 0) !important",
                },
                ".mask": {
                    "mask-size": "contain",
                    "mask-repeat": "no-repeat",
                    "mask-position": "center",
                },
                ".mask-hex": {
                    "mask-image":
                        "url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjE4MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNNjQuNzg2IDE4MS40Yy05LjE5NiAwLTIwLjA2My02LjY4Ny0yNS4wNzktMTQuMjFMMy43NjIgMTA1LjMzYy01LjAxNi04LjM2LTUuMDE2LTIwLjkgMC0yOS4yNTlsMzUuOTQ1LTYxLjg2QzQ0LjcyMyA1Ljg1MSA1NS41OSAwIDY0Ljc4NiAwaDcxLjA1NWM5LjE5NiAwIDIwLjA2MyA2LjY4OCAyNS4wNzkgMTQuMjExbDM1Ljk0NSA2MS44NmM0LjE4IDguMzYgNC4xOCAyMC44OTkgMCAyOS4yNThsLTM1Ljk0NSA2MS44NmMtNC4xOCA4LjM2LTE1Ljg4MyAxNC4yMTEtMjUuMDc5IDE0LjIxMUg2NC43ODZ6Ii8+PC9zdmc+')",
                },
                ".mask-hexed": {
                    "mask-image":
                        "url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgyIiBoZWlnaHQ9IjIwMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNLjMgNjUuNDg2YzAtOS4xOTYgNi42ODctMjAuMDYzIDE0LjIxMS0yNS4wNzhsNjEuODYtMzUuOTQ2YzguMzYtNS4wMTYgMjAuODk5LTUuMDE2IDI5LjI1OCAwbDYxLjg2IDM1Ljk0NmM4LjM2IDUuMDE1IDE0LjIxMSAxNS44ODIgMTQuMjExIDI1LjA3OHY3MS4wNTVjMCA5LjE5Ni02LjY4NyAyMC4wNjMtMTQuMjExIDI1LjA3OWwtNjEuODYgMzUuOTQ1Yy04LjM2IDQuMTgtMjAuODk5IDQuMTgtMjkuMjU4IDBsLTYxLjg2LTM1Ljk0NUM2LjE1MSAxNTcuNDQuMyAxNDUuNzM3LjMgMTM2LjU0VjY1LjQ4NnoiLz48L3N2Zz4=')",
                },
                ".mask-deca": {
                    "mask-image":
                        "url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNOTYgMGw1OC43NzkgMTkuMDk4IDM2LjMyNyA1MHY2MS44MDRsLTM2LjMyNyA1MEw5NiAyMDBsLTU4Ljc3OS0xOS4wOTgtMzYuMzI3LTUwVjY5LjA5OGwzNi4zMjctNTB6IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=')",
                },
                ".mask-blob": {
                    "mask-image":
                        "url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTAwIDBDMjAgMCAwIDIwIDAgMTAwczIwIDEwMCAxMDAgMTAwIDEwMC0yMCAxMDAtMTAwUzE4MCAwIDEwMCAweiIvPjwvc3ZnPg==')",
                },
                ".mask-diamond": {
                    "mask-image":
                        "url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTAwIDBsMTAwIDEwMC0xMDAgMTAwTDAgMTAweiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+')",
                },
            });
        }),
        plugin(function ({ addComponents }) {
            addComponents({
                ".placeload": {
                    position: "relative",
                    background:
                        "linear-gradient(to right, rgb(148 163 184 / 20%) 8%, rgb(148 163 184 / 30%) 18%, rgb(148 163 184 / 20%) 33%)",
                    "background-size": "800px 104px",
                    color: "transparent !important",
                },
                /*'.dark .placeload': {
              background:
                'linear-gradient(to right, rgb(255 255 255 / 15%) 8%, rgb(255 255 255 / 24%) 18%, rgb(255 255 255 / 15%) 33%)',
            },*/
            });
        }),
        function ({ addVariant }) {
            addVariant("child", "& > *");
            addVariant("child-hover", "& > *:hover");
        },
        function ({ addBase, theme }) {
            function extractColorVars(colorObj, colorGroup = "") {
                return Object.keys(colorObj).reduce((vars, colorKey) => {
                    const value = colorObj[colorKey];

                    const newVars =
                        typeof value === "string"
                            ? { [`--color${colorGroup}-${colorKey}`]: value }
                            : extractColorVars(value, `-${colorKey}`);

                    return { ...vars, ...newVars };
                }, {});
            }

            addBase({
                ":root": extractColorVars(theme("colors")),
            });
        },
    ],
};
