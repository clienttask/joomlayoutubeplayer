# Joomla YouTube Player Module (`joomlayoutubeplayer`)

## 📖 Overview
The **Joomla YouTube Player Module** is a lightweight extension for **Joomla 6** that allows you to embed and display YouTube videos directly on your Joomla-powered website. It is written in **PHP** and packaged as a standard Joomla module for easy installation and management.

This project is in its **early development stage** and may require manual setup and testing.

---

## ⚙️ Features
- Embed YouTube videos in Joomla 6 modules.
- Configure video playback directly from the Joomla admin panel.
- Lightweight and minimal codebase for easy customization.

---

## 📦 Installation

1. **Clone or Download the Repository**
   ```bash
   git clone https://github.com/clienttask/joomlayoutubeplayer.git
   ```
   Or download the ZIP file from GitHub.

2. **Copy Module Folder**
   - Locate the folder `mod_youtubeplayer/` inside the repository.
   - Copy this folder into your Joomla installation under:
     ```
     /modules/
     ```

3. **Install via Joomla Admin**
   - Log in to your Joomla Administrator panel.
   - Go to **Extensions → Manage → Discover**.
   - Click **Discover** to find the new module.
   - Select **YouTube Player** and click **Install**.

---

## 🎛️ Configuration

1. Navigate to **Extensions → Modules** in the Joomla admin panel.
2. Find **YouTube Player** in the module list.
3. Open the module settings:
   - **YouTube Video ID**: Enter the ID of the YouTube video you want to display (e.g., for `https://www.youtube.com/watch?v=dQw4w9WgXcQ`, the ID is `dQw4w9WgXcQ`).
   - **Width/Height**: Set the dimensions of the embedded player.
   - **Autoplay**: Enable or disable autoplay.
   - **Loop**: Choose whether the video should loop.

4. Assign the module to a position in your template.
5. Save and refresh your site to see the embedded video.

---

## 🧩 Usage Example

After configuration, the module will render a YouTube player on your Joomla site. Example embed:

```html
<iframe width="560" height="315"
  src="https://www.youtube.com/embed/dQw4w9WgXcQ"
  frameborder="0"
  allowfullscreen>
</iframe>
```

## 🚧 Roadmap
- Add multiple video support.
- Playlist integration.
- Custom player controls (mute, start time, end time).
- Improved admin UI with preview.

---

## 🤝 Contributing
This is an early-stage project. Contributions are welcome:
- Fork the repo
- Create a feature branch
- Submit a pull request

---

## 📜 License
This project does not yet specify a license. If you plan to use or contribute, please check with the repository owner.

---

👉 Would you like me to also **write a sample `mod_youtubeplayer.xml` manifest file** (which Joomla requires for module installation), so you can drop it in and have a working install package right away?
