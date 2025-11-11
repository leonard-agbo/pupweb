# PupWeb - Puppies for Sale & Adoption

A delightful web application dedicated to helping people find and adopt their perfect puppy companion! PupWeb offers both rare breed puppies for sale and free puppies available for adoption.

## 🐕 Features

### Core Functionality
- **Browse Puppies**: Browse a curated collection of puppies with detailed information
- **Free Adoption**: Adopt puppies for free with only a delivery fee
- **Purchase Rare Breeds**: Buy rare breed puppies with secure payment options
- **Multiple Payment Methods**:
  - Credit Card
  - Debit Card
  - Bitcoin (BTC) cryptocurrency
- **Contact System**: Reach out to the PupWeb team with questions or inquiries
- **Care Guides**: Educational resources for puppy care including:
  - Feeding and nutrition
  - Training basics
  - Health & vaccinations
  - Grooming & hygiene
  - Socialization tips

### Interactive Features
- **Startup Video**: Welcoming video overlay on homepage with skip option
- **Paw Loading Animation**: Custom animated paw print loading indicator
- **Success Stories**: Showcase of happy adoptions and success stories
- **Live Adoption Counter**: Real-time counter displaying total puppies adopted
- **Theme Toggle**: Footer theme switcher between dark and light modes
- **Background Music**: Optional background music for enhanced experience
- **Back to Top Button**: Paw-themed floating button for quick navigation
- **Responsive Design**: Fully responsive layout for mobile and desktop

## 📁 Project Structure

```
pupweb/
├── index.html                    # Homepage with puppy listings
├── adopt.html                    # Free adoption listings
├── about.html                    # About PupWeb
├── contact.html                  # Contact form
├── payment-options.html          # Payment method selection
├── checkout.html                 # Generic checkout page
├── btc-payment.html              # Bitcoin payment form
├── creditcard-payment.html       # Credit card payment form
├── debitcard-payment.html        # Debit card payment form
├── signup.html                   # User registration
├── login.html                    # User login
├── simplepayment.html            # Simple payment page
├── billing.php                   # Billing processing
├── process_btc.php               # Bitcoin transaction processing
├── process_creditcard.php        # Credit card transaction processing
├── process_debitcard.php         # Debit card transaction processing
├── style.css                     # Main stylesheet
├── create_*.sql                  # Database schema files
├── assets/
│   ├── app.js                    # Main JavaScript functionality
│   ├── styles.css                # Global styles
│   ├── adopt.css                 # Adoption page styles
│   ├── about.css                 # About page styles
│   ├── auth.css                  # Authentication styles
│   ├── contact.css               # Contact page styles
│   ├── credit.css                # Credit card styles
│   ├── debit.css                 # Debit card styles
│   ├── puppy-theme.mp3           # Background music
│   └── puppies.mp4               # Startup video
├── images/                       # Puppy images and assets
│   ├── *.jpg                     # Puppy photos
│   └── *.png                     # Icons and logos
└── README.md                     # This file
```

## 🗄️ Database Schema

The project includes database schema files for managing:
- **create_contact_messages.sql** - Contact form submissions
- **create_btc_payments.sql** - Bitcoin transaction records
- **create_creditcard_payments.sql** - Credit card payment records
- **create_debitcard_payments.sql** - Debit card payment records

## 🛠️ Technologies Used

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Styling and animations
- **JavaScript** - Interactive functionality and DOM manipulation
- **SVG** - Custom paw print graphics and icons

### Backend
- **PHP** - Payment processing and form handling
- **MySQL/MariaDB** - Data storage

### Features
- **LocalStorage** - Client-side theme persistence
- **SessionStorage** - Payment method tracking
- **MutationObserver** - Dynamic DOM element monitoring
- **IntersectionObserver** - Scroll-based animation triggering

## 🚀 Getting Started

### Prerequisites
- XAMPP (or similar PHP/MySQL development environment)
- Web browser with JavaScript enabled
- Local MySQL database

### Installation

1. **Copy to XAMPP htdocs**
   ```
   Copy the pupweb folder to C:\xampp\htdocs\
   ```

2. **Create Database**
   - Start XAMPP and ensure MySQL is running
   - Import the SQL schema files:
     ```sql
     - create_contact_messages.sql
     - create_btc_payments.sql
     - create_creditcard_payments.sql
     - create_debitcard_payments.sql
     ```

3. **Configure Database Connection**
   - Update PHP files (`billing.php`, `process_*.php`) with your database credentials
   - Default: localhost, user: root, no password (XAMPP default)

4. **Start Development**
   - Start Apache and MySQL in XAMPP Control Panel
   - Navigate to `http://localhost/pupweb/` in your browser

## 📋 Key PHP Files

### `billing.php`
Handles general billing and order processing logic.

### `process_btc.php`
Manages Bitcoin payment transactions and blockchain integration.

### `process_creditcard.php`
Processes credit card payments with secure payment gateway integration.

### `process_debitcard.php`
Handles debit card transactions and verification.

## 🎨 Styling

The project uses a modular CSS approach with separate stylesheets for different sections:
- **Global styles** (`assets/styles.css`) - Base styling and layout
- **Page-specific styles** - Dedicated CSS for each major page
- **Animations** - Smooth transitions and keyframe animations
- **Responsive breakpoints** - Mobile-first responsive design

### Color Scheme
- Primary: Orange (#e67e22)
- Dark backgrounds (#222)
- Light text (#fff)
- Accent colors for call-to-action elements

## 🔧 JavaScript Functionality

### `assets/app.js` - Main Features

1. **Payment System**
   - Route users to appropriate payment processor
   - Store payment method in sessionStorage

2. **Startup Video**
   - Display welcome video overlay on homepage
   - Allow users to skip video
   - Prevent scrolling during video playback

3. **Paw Loading Animation**
   - Custom animated loading indicator
   - Triggered on payment/adoption button clicks
   - Automatic hide after 2 seconds

4. **Dynamic Button Attachment**
   - Monitor DOM for dynamically added buy/adopt buttons
   - Attach paw loading to user interactions
   - Use MutationObserver for real-time updates

5. **Footer Interactivity**
   - Theme toggle (dark/light mode)
   - Music player controls
   - Back-to-top floating button
   - Social media links
   - Puppy facts on logo hover
   - Animated confetti on heart click

## 📱 Responsive Design

The application is fully responsive and optimized for:
- **Desktop** - Full-width layout with all features
- **Tablet** - Adjusted spacing and grid layouts
- **Mobile** - Touch-friendly buttons and collapsed navigation

## 🔐 Security Considerations

- PHP payment processing scripts should validate all inputs
- Implement proper authentication before processing payments
- Use HTTPS in production for all payment pages
- Sanitize and validate database inputs
- Store sensitive data securely (consider environment variables)

## 🐾 Fun Features

- **Paw Print Graphics** - Custom SVG paw prints throughout the site
- **Animated Loading** - Charming paw trail animation
- **Dynamic Counter** - Live adoption counter
- **Interactive Footer** - Multiple interactive elements and animations
- **Theme Switching** - Light/dark mode toggle
- **Background Music** - Optional puppy-themed music
- **Floating Animations** - Paw prints and confetti effects

## 📝 License

All rights reserved © 2025 PupWeb

## 🤝 Support

For questions or issues, use the Contact Us page in the application or email support@pupweb.com

---

**Made with ❤️ for puppies** 🐕
