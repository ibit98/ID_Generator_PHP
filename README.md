# ID Card Generator

This project is a simple PHP-based ID card generator that creates a PDF file using TCPDF.

## 📌 Prerequisites
Before setting up the project, ensure you have the following installed:
- PHP (>= 7.4)
- Apache or any local server (XAMPP, MAMP, etc.)
- Composer (for dependency management)

## 🚀 Installation & Setup
### 1️⃣ Clone the Repository
```sh
git clone https://github.com/your-repo/id-card-generator.git
cd id-card-generator
```

### 2️⃣ Install Dependencies
If you're using Composer, run:
```sh
composer install
```

If TCPDF is missing, install it manually:
```sh
composer require tecnickcom/tcpdf
```

### 3️⃣ Set Up Apache (Optional)
If using Apache, configure a virtual host or place the project inside `htdocs` (for XAMPP/MAMP users).

### 4️⃣ Run the Project
If using PHP’s built-in server, navigate to the project folder and run:
```sh
php -S localhost:8000
```
Now, open **http://localhost:8000** in your browser.

## 📄 How to Generate ID Cards
1. Open the web page.
2. Fill in the required details.
3. Click the **Generate PDF** button.
4. Your ID card PDF will be downloaded automatically.

## 🛠 Troubleshooting
- If you see a `Failed to open stream: No such file or directory` error, ensure TCPDF is properly installed.
- If `TCPDF ERROR: Some data has already been output`, make sure there is no extra whitespace or output before generating the PDF.

## 📧 Support
For any issues, feel free to open an issue or contact support@example.com.

---
Happy coding! 🚀

Developed by Indranil Bit
