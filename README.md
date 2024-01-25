# php-proxy-cdn

A simple and privacy respecting way to include external files in your website.

# "Installation"

- Create an empty directory on your website. I recommend a subdomain like "cdn.example.com".
- Upload the `index.php` there

# Usage

You basically just prepend the URL to your index.php with the `?src=` parameter to any script or style you want to load into your website.

Sticking to the example above this would be `https://cdn.example.com/?src=<URL>`

## Some real examples

Include some CSS like sakura.css on your website:

`<link rel="stylesheet" href="https://cdn.example.com/?src=https://raw.githubusercontent.com/oxalorg/sakura/master/css/sakura.css">`

Include a JavaScript like VQ.js

`<script src="https://cdn.example.com/?src=https://raw.githubusercontent.com/vincenz-e/VQ.js/main/src/VQ.js"></script>`

**Set a custom content / MIME type** 

Just add the `ct` parameter like this:

`<script src="https://cdn.example.com/?ct=text/javascript&src=https://raw.githubusercontent.com/vincenz-e/VQ.js/main/src/VQ.js"></script>`

If the URL ends with `.js` or `.css` the Content-type is set automatically but can still be overridden by the `ct` parameter.

## The "Problem" with normal CDNs

Normally you have to include a cdn in your privacy policy and you are also forcing a website visitor to request data from a 3rd party server.

If you don't want to force your users to request 3rd party servers you would need to setup a complete own cdn or by donwloading and uploading everything by hand.

## The "Solution"

The request to the 3rd party server is proxied by the php script, so everything is served by your own server. No need to upload any scripts to your server.

This is most likely not the fastet way to load external data, so this probably only works fine on a smaller scale, but for simple homepages with few dependencies this should be good enough.
