
# Bootstrap Business

A multipurpose Bootstrap full website template ported from Start Bootstrap.

> __Requires__ Devflow Version: 3.x

> __Tested Up To:__ 3.0.0

> __Requires PHP:__ 8.4+

> __Stable Tag:__ 3.0.0

> __License:__ GPLv2-only

## Screenshot
![screenshot.png](public/images/screenshot.png)

## Localization
Portuguese, Chines (Simplified), German, English, Spanish, French, Italian Japanese, and Russian

## Optional Header Footer Builder integration

When [Header Footer Builder](https://getdevflow.com/extensions/getdevflow/header-footer-builder) is installed and activated, this theme declares its
`bb-navbar` header and `bb-footer` footer through the plugin's `header.footer.slots`
filter. Its `header.footer.canvas.assets` filter supplies the matching Bootstrap
5.2.3 bundle, Bootstrap Icons, and inherited theme stylesheet for editor previews.
Without the plugin, the original theme blocks continue rendering normally.

Child themes inherit these hooks by calling `parent::handle()`. Override a mapping
or asset list with a later-priority filter if your child uses different blocks or
libraries. Callbacks check the rendering adapter's ancestry, so the theme's hooks
do not affect independently previewed unrelated themes.

## Codex Installation
1. Start a new shell session.
2. In the root of your install, run the following command ```php codex theme:install getdevflow/bootstrap-business```.

## Changelog

### 3.0.0
- Upgraded for Devflow v3
- Child theme support

### 2.0.0
- `pagebuilder.support` filter hook check
- uses new `cms_body_open` action hook

### 1.0.0
- Initial addition
