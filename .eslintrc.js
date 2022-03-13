module.exports = {
  env: {
    browser: true,
    es6: true
  },
  extends: [
    "eslint:recommended",
    "plugin:@typescript-eslint/eslint-recommended",
    "plugin:@typescript-eslint/recommended",
    "plugin:react/recommended",
    "plugin:react-hooks/recommended",
    "prettier"
  ],
  parser: '@typescript-eslint/parser',
  parserOptions: {
    ecmaFeatures: {
      jsx: true,
    },
    ecmaVersion: 'latest',
    sourceType: 'module',
    project: "./tsconfig.json" // TypeScriptのLint時に参照するconfigファイルを指定
  },
  plugins: ["react-hooks", "react", "@typescript-eslint"],
  rules: {
    // TypeScirpt なので prop-types は要らない
    "react/prop-types": "off",
    "react/react-in-jsx-scope": "off",
  },
  root: true, // 上位ディレクトリにある他のeslintrcを参照しないようにする
  settings: {
    "react": {
      "version": "detect"
    }
  },
};
