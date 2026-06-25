# 🚀 Scroll To Top WordPress Plugin

A lightweight and simple WordPress plugin that adds a smooth **"Scroll To Top"** button to your website.

When visitors scroll down the page, a floating button appears in the bottom-right corner. Clicking it instantly takes them back to the top of the page with a smooth scrolling effect.

## ✨ Features

* Smooth scroll-to-top functionality
* Lightweight and fast
* Responsive design
* Font Awesome icon support
* Easy shortcode integration
* No configuration required
* Compatible with most WordPress themes

## 📦 Installation

### Method 1: Upload Plugin

1. Download the plugin files.
2. Upload the plugin folder to:

```text
wp-content/plugins/
```

3. Go to **WordPress Dashboard → Plugins**.
4. Activate **Scroll To Top**.

### Method 2: Manual Installation

Clone the repository into your plugins directory:

```bash
git clone https://github.com/ahmadesmailimajd1995/scroll-to-top.git
```

Then activate the plugin from your WordPress admin panel.

## 🚀 Usage

After activating the plugin, add the following shortcode anywhere you want the button to appear:

```text
[stt_scroll_shortcode]
```

### Example

Add the shortcode to:

* Pages
* Posts
* Widgets
* Elementor Shortcode Widget
* Gutenberg Shortcode Block

```text
[stt_scroll_shortcode]
```

## 🎨 Styling

The button is styled using CSS and includes:

* Fixed position
* Bottom-right placement
* Rounded corners
* Dark background
* White arrow icon
* Smooth appearance/disappearance on scroll

Default appearance:

```css
background: #333c56;
color: #ffffff;
width: 40px;
height: 40px;
```

You can easily customize the style by editing:

```text
assets/css/style.css
```

## ⚙️ How It Works

1. The plugin loads its CSS and JavaScript assets.
2. A shortcode generates the scroll button.
3. JavaScript detects page scrolling.
4. Once the user scrolls more than 200px, the button fades in.
5. Clicking the button smoothly scrolls the page back to the top.

## 📁 Project Structure

```text
scroll-to-top/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   └── js/
│       └── main.js
│
├── view/
│   └── front/
│       └── scroll.php
│
└── scroll-to-top.php
```

## 🛠 Requirements

* WordPress 5.2+
* PHP 7.2+

## 👨‍💻 Author

**Ahmad Esmaeili Majd**

## 📄 License

This project is licensed under the GPL v2 or later License.

For more information:

https://www.gnu.org/licenses/gpl-2.0.html

## ⭐ Support

If you find this project useful, please consider giving it a ⭐ on GitHub.

Contributions, suggestions, and feedback are always welcome!

Happy coding! 🚀
