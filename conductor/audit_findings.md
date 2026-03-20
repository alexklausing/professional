# Codebase Audit Findings - Track: review_codebase_20260320

## HTML Audit
1. **Structural Inconsistency:** 
   - Some files start with `<body>` (`index.html`, `resume.html`, `relocate.html`).
   - Others include full `<html>` and `<head>` tags (`about.html`, `references.html`, `resume_sec.html`).
   - `contact.html` has a partial `<head>` then `<body>`.
2. **Meta Tag Redundancy:** `js/includes.js` appends `assets/head.html` to the `<head>`. Files with their own `<head>` risk duplicate meta tags (viewport, title, description).
3. **GitHub Pages Compatibility:** `pages/fundraising.html` contains PHP code (`<?php include ... ?>`). GitHub Pages only supports static content, so this file will not function as intended.
4. **Inline Assets:** Inline `<style>` and `<script>` blocks are present in `assets/navigation.html`, `assets/footer.html`, and `pages/resume/resume_sec.html`. These should ideally be moved to their respective `.css` or `.js` files for better maintainability and caching.
5. **Tailwind CSS:** Consistent usage throughout most files, leveraging custom colors defined in `tailwind.config.js`.

## JavaScript Audit
1. **Dynamic Inclusion:** `js/includes.js` uses `fetch` and `DOMParser` to manage head, nav, and footer. This is a solid approach for static site generation in the browser.
2. **Redundant Initialization:** Both `js/includes.js` and `pages/resume/resume_sec.html` (via `runPageSetup`) call `runIncludes`, leading to duplicate network requests and potential race conditions.
3. **Inline Scripts:** Critical logic for the hamburger menu (`assets/navigation.html`) and accordion (`pages/resume/resume_sec.html`) is inline. This should be moved to external `.js` files.
4. **Global Namespace:** Several functions (`runIncludes`, `loadHtmlInclude`, etc.) are declared in the global scope, increasing the risk of name collisions.
