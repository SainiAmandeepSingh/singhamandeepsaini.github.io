# Personal Portfolio

This repository contains a static portfolio site built with HTML, CSS and JavaScript. The contact form was previously handled by a PHP script but now uses [Formspree](https://formspree.io/) so it can be hosted for free on static hosting services.

## Setting up the contact form

1. Create a free account on Formspree and generate a form endpoint.
2. Edit `index.html` and replace `https://formspree.io/f/your-form-id` in the form `action` attribute with the endpoint provided by Formspree.
3. Deploy the site (e.g. GitHub Pages or Netlify). Form submissions will be delivered to the email configured in Formspree.

## Development

All site content lives in `index.html` and the `assets/` folder. CSS styles are in `assets/css/style.css` and JavaScript behaviour is in `assets/js/main.js`.
