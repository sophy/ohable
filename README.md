[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

 "Ohable" - The Ultimate Class Theme for WordPress
===

Elevate your online presence with "Ohable," a meticulously crafted WordPress theme designed to encapsulate elegance, functionality, and user-centricity. With a primary focus on optimizing both SEO performance and user engagement, Ohable is more than just a theme – it's an experience.

🌟 Elegance Meets Functionality:
====
Ohable seamlessly blends a sophisticated design with user-friendly functionality. Its clean and modern aesthetic ensures that your content takes center stage, while the intuitive navigation empowers visitors to explore your website effortlessly.

🚀 SEO Optimization at its Core:
====
Harness the power of SEO with Ohable's built-in optimization features. From clean code to schema markup, every aspect of the theme is fine-tuned to enhance your website's visibility on search engines. Say goodbye to hidden hurdles – Ohable puts you on the map.

👁️ User-Centric Interface:
====
User experience reigns supreme, and Ohable excels in this domain. The theme's responsive design ensures a flawless presentation on all devices, while carefully curated typography and spacing enhance readability. Your audience will engage with your content like never before.

🔗 Clickable and Interactive:
Ohable places a premium on user interaction. From intuitive call-to-action buttons to strategically placed links, every element is designed to encourage clicks and engagement. Maximize user interaction and conversions effortlessly.

🎨 Customization Made Easy:
====
Personalize Ohable to match your brand's identity. The user-friendly customization options allow you to tweak colors, fonts, layouts, and more without any coding knowledge. Your website will truly be an extension of your unique style.

📈 Optimized for Performance:
====
Speed matters, and Ohable understands that. With optimized code and performance-driven features, your website will load swiftly, ensuring that visitors stay engaged and explore more of what you offer.

📢 Amplify Your Message:
====
Whether you're a blogger, creative professional, or business owner, Ohable provides the perfect canvas to amplify your message. Share your thoughts, showcase your portfolio, or promote your products with confidence.

In a world of infinite choices, Ohable stands out as a theme that marries class, SEO prowess, and user-friendliness seamlessly. Elevate your online presence, captivate your audience, and achieve your digital goals with Ohable. Discover a new era of WordPress themes today.

Experience "Ohable" – Where Elegance Meets Performance.

Download Now and Elevate Your Website!

Installation
---------------

### Requirements

`Ohable` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'ohable'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `ohable_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: ohable` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for ` ohable-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for ` OHABLE_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `Ohable`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`Ohable` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
