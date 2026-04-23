const aiPrompt = document.getElementById('aiPrompt');
const aiOutput = document.getElementById('aiOutput');
const aiGenerate = document.getElementById('aiGenerate');

if (aiGenerate) {
  aiGenerate.addEventListener('click', () => {
    const niche = aiPrompt.value.trim() || 'custom products';
    aiOutput.textContent = [
      '✅ AI Store Blueprint Generated',
      `• Brand direction: Premium ${niche} storefront`,
      '• Homepage blocks: Hero, category rail, trust badges, testimonials, reorder CTA',
      '• Product schema: Variants by size/color/material + personalization options',
      '• Payments enabled: PayPal, cash on pickup, local delivery',
      '• Shipping mode: Dynamic carrier matrix (USPS/UPS/FedEx) + best-rate suggestion',
      '• Suggested launch task: Import first 12 products and activate customer accounts'
    ].join('\n');
  });
}

const tabButtons = document.querySelectorAll('.tab-btn');
const tabPanels = document.querySelectorAll('.tab-panel');

for (const button of tabButtons) {
  button.addEventListener('click', () => {
    const id = button.dataset.tab;

    tabButtons.forEach((btn) => btn.classList.remove('active'));
    tabPanels.forEach((panel) => panel.classList.remove('active'));

    button.classList.add('active');
    document.getElementById(id)?.classList.add('active');
  });
}

const applyDesign = document.getElementById('applyDesign');
const mock3d = document.getElementById('mock3d');
const mockLabel = document.getElementById('mockLabel');

if (applyDesign && mock3d && mockLabel) {
  applyDesign.addEventListener('click', () => {
    const chosenColor = document.getElementById('accentColor').value;
    const customText = document.getElementById('engraveText').value || 'CUSTOM';
    const productName = document.getElementById('productType').value;

    mock3d.style.setProperty('--brand', chosenColor);
    mockLabel.textContent = `${productName.toUpperCase()} • ${customText.toUpperCase()}`;
  });
}

const calcShipping = document.getElementById('calcShipping');
const rateList = document.getElementById('rateList');

const formatUsd = (value) => `$${value.toFixed(2)}`;

const makeRate = (carrier, base, weight, distance, speedFactor) => {
  const dynamic = base + (weight * 0.85) + (distance * 0.02 * speedFactor);
  return { carrier, total: dynamic };
};

if (calcShipping && rateList) {
  const renderRates = () => {
    const weight = Number(document.getElementById('weight').value || 1);
    const distance = Number(document.getElementById('distance').value || 50);

    const rates = [
      makeRate('USPS Priority', 5.9, weight, distance, 0.95),
      makeRate('UPS Ground', 6.4, weight, distance, 1.0),
      makeRate('FedEx Home Delivery', 7.2, weight, distance, 1.08)
    ].sort((a, b) => a.total - b.total);

    rateList.innerHTML = rates
      .map((rate, index) => `<li>${index === 0 ? '⭐ Best Rate — ' : ''}${rate.carrier}: <strong>${formatUsd(rate.total)}</strong></li>`)
      .join('');
  };

  calcShipping.addEventListener('click', renderRates);
  renderRates();
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.15 });

document.querySelectorAll('.reveal').forEach((item) => observer.observe(item));
