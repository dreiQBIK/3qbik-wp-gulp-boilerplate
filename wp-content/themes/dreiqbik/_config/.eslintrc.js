module.exports = {
    "env": {
        "browser": true,
        "jquery": true
    },
    "extends": "airbnb-base",
    "rules": {
        "indent": [
            "error",
            4
        ],
        "quotes": [
            "error",
            "single"
        ],
        "linebreak-style": 0,
        "no-var": 0,
        "prefer-arrow-callback": 0,
        "func-names": 0,
        "spaced-comment": 0,
        "padded-blocks": 0,
        "no-use-before-define": 0,
        "comma-dangle": [
            "error",
            "never"
        ],
        "no-underscore-dangle": 0,
        "no-unused-vars": [
            "warn",
            {
                "vars": "local",
                "args": "none"
            }
        ],
        "wrap-iife": [
            "error",
            "inside"
        ],
        "object-shorthand": 0
    }
};
