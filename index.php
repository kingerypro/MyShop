<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout by KPro</title>
  <meta name="description" content="Checkout by KPro: AI-native ecommerce platform with full control over layout, products, payments, and shipping.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header" id="top">
    <a href="#top" class="logo">
      <span class="logo-mark">K</span>
      <span>Checkout by KPro</span>
    </a>
    <nav class="top-nav">
      <a href="#features">Features</a>
      <a href="#dashboard">Dashboard</a>
      <a href="#catalog">Products</a>
      <a href="#builder">3D Builder</a>
      <a href="#accounts">Accounts</a>
      <a href="#shipping">Shipping</a>
      <a href="about.php">About</a>
    </nav>
    <button class="cta-btn">Start Free Setup</button>
  </header>

  <main>
    <section class="hero reveal">
      <div class="hero-copy">
        <p class="eyebrow">Modern Commerce OS</p>
        <h1>Build and run your online store faster than WordPress.</h1>
        <p>
          Checkout by KPro combines AI-powered setup, design control, product management,
          built-in payments, and live carrier rates into one clean platform.
        </p>
        <div class="hero-actions">
          <button class="cta-btn">Generate My Store with AI</button>
          <a class="ghost-btn" href="#dashboard">Explore Dashboard</a>
        </div>
        <ul class="hero-highlights">
          <li>AI store setup in minutes</li>
          <li>No plugin dependency for payments</li>
          <li>USPS, UPS & FedEx real-time rates</li>
        </ul>
      </div>
      <div class="hero-panel card">
        <h2>AI Launch Assistant</h2>
        <p class="muted">Tell Checkout what you sell and we scaffold your storefront instantly.</p>
        <label for="aiPrompt">What are you launching?</label>
        <textarea id="aiPrompt" rows="4" placeholder="Example: I sell custom laser engraved tumblers, vinyl decals, and 3D printed gifts for events."></textarea>
        <button id="aiGenerate" class="cta-btn full">Generate Store Blueprint</button>
        <pre id="aiOutput" class="ai-output">Ready to generate your store blueprint...</pre>
      </div>
    </section>

    <section id="features" class="section reveal">
      <h2>Core platform features</h2>
      <div class="grid three">
        <article class="card">
          <h3>AI Everywhere</h3>
          <p>Use contextual AI for onboarding, editing layouts, writing product descriptions, and proactive admin help.</p>
        </article>
        <article class="card">
          <h3>Simple Admin</h3>
          <p>Single command center for products, orders, customers, and marketing, designed for non-technical teams.</p>
        </article>
        <article class="card">
          <h3>Built-in Payments</h3>
          <p>Accept PayPal, cash on pickup, and local delivery without installing plugins or custom extensions.</p>
        </article>
      </div>
    </section>

    <section id="dashboard" class="section reveal">
      <h2>Dashboard: easier than WordPress</h2>
      <div class="dashboard card">
        <aside class="tabs" role="tablist" aria-label="Admin modules">
          <button class="tab-btn active" data-tab="layout">Layout Studio</button>
          <button class="tab-btn" data-tab="products">Products</button>
          <button class="tab-btn" data-tab="orders">Orders</button>
          <button class="tab-btn" data-tab="help">AI Help</button>
        </aside>
        <div class="tab-panels">
          <article id="layout" class="tab-panel active">
            <h3>Drag-to-edit layout control</h3>
            <p>Reorder hero blocks, category rows, testimonials, and promo banners with instant preview.</p>
          </article>
          <article id="products" class="tab-panel">
            <h3>Variant-based product management</h3>
            <p>Create products with size, color, material, and fulfillment options from one clean editor.</p>
          </article>
          <article id="orders" class="tab-panel">
            <h3>Unified order operations</h3>
            <p>Track payment status, shipping labels, and pickup/delivery windows without switching tools.</p>
          </article>
          <article id="help" class="tab-panel">
            <h3>Contextual AI assistant</h3>
            <p>Ask for guidance from any page and get store-aware recommendations instantly.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="catalog" class="section reveal">
      <h2>Homepage categories for creative product businesses</h2>
      <div class="grid three">
        <article class="category card float">
          <h3>Laser Engraving</h3>
          <p>Custom tumblers, plaques, and wedding keepsakes with rapid proof approvals.</p>
          <button class="ghost-btn">Shop Category</button>
        </article>
        <article class="category card float">
          <h3>3D Printing</h3>
          <p>Functional parts, prototypes, and personalized gifts with flexible material options.</p>
          <button class="ghost-btn">Shop Category</button>
        </article>
        <article class="category card float">
          <h3>Vinyl Products</h3>
          <p>Durable decals, signage, and branded bundles built for events and small businesses.</p>
          <button class="ghost-btn">Shop Category</button>
        </article>
      </div>
    </section>

    <section id="builder" class="section reveal">
      <h2>Interactive 3D customization builder</h2>
      <div class="builder-layout">
        <div class="card builder-controls">
          <label for="productType">Product</label>
          <select id="productType">
            <option value="Tumbler">Engraved Tumbler</option>
            <option value="Phone Stand">3D Printed Phone Stand</option>
            <option value="Wall Decal">Premium Wall Decal</option>
          </select>

          <label for="accentColor">Accent Color</label>
          <input id="accentColor" type="color" value="#6d4aff">

          <label for="engraveText">Custom Text</label>
          <input id="engraveText" type="text" maxlength="24" value="KPRO CUSTOM">

          <button id="applyDesign" class="cta-btn full">Apply Design</button>
        </div>

        <div class="card builder-preview">
          <div id="mock3d" class="mock-3d">
            <span id="mockLabel">KPRO CUSTOM</span>
          </div>
          <p class="muted">Rotate, zoom, and preview final output before adding to cart (demo visualization).</p>
        </div>
      </div>
    </section>

    <section id="accounts" class="section reveal">
      <h2>Customer accounts and reorder flow</h2>
      <div class="grid two">
        <article class="card">
          <h3>Account login</h3>
          <p>Secure account area with order history, saved addresses, and one-click reordering.</p>
          <ul>
            <li>Order status timeline</li>
            <li>Saved custom designs</li>
            <li>Returns and support history</li>
          </ul>
        </article>
        <article class="card">
          <h3>Checkout options</h3>
          <p>Built-in payment and fulfillment options without plugins.</p>
          <ul>
            <li>PayPal checkout</li>
            <li>Cash on pickup</li>
            <li>Local delivery</li>
          </ul>
        </article>
      </div>
    </section>

    <section id="shipping" class="section reveal">
      <h2>Real-time shipping rates</h2>
      <div class="card shipping-tool">
        <div class="shipping-inputs">
          <label for="weight">Package Weight (lb)</label>
          <input id="weight" type="number" min="0.1" step="0.1" value="2.0">

          <label for="distance">Distance (miles)</label>
          <input id="distance" type="number" min="1" step="1" value="120">

          <button id="calcShipping" class="cta-btn">Calculate Rates</button>
        </div>
        <div class="rates">
          <p class="muted">Carrier quotes update dynamically based on order context.</p>
          <ul id="rateList"></ul>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <p>Checkout by KPro — cleaner, faster, and easier to manage than legacy ecommerce stacks.</p>
    <a href="#top">Back to top ↑</a>
  </footer>

  <script src="script.js"></script>
</body>
</html>
