<?php
// Outputs JavaScript; provides THEME_URL for images
header('Content-Type: application/javascript');
$theme_url = get_stylesheet_directory_uri();
?>
const THEME_URL = '<?php echo $theme_url; ?>';

// ▼▼▼ PASTE your old products array BELOW (example shown) ▼▼▼
var products = [const products = [
  { name: 'Prawns 10/12 pcs', basePrice: 1000, image: 'images/prawns1.png' },
  { name: 'Prawns 15/18 pcs', basePrice: 850, image: 'images/prawns4.png' },
  { name: 'Prawns 25/30 pcs', basePrice: 700, image: 'images/prawns3.png' },
  { name: 'Prawns 35/40 pcs', basePrice: 600, image: 'images/prawns.png' },
  { name: 'Prawns 50/55 pcs', basePrice: 550, image: 'images/prawns2.png' },
  { name: 'Pomfret 4/5 pcs', basePrice: 1200, image: 'images/pomfret3.png' },
  { name: 'Pomfret 3 pcs', basePrice: 1300, image: 'images/pomfret1.png' },
  { name: 'Pomfret 2 pcs', basePrice: 1600, image: 'images/pomfret2.png' },
  { name: 'Surmai Small', basePrice: 700, image: 'images/surmai1.png' },
  { name: 'Surmai Big', basePrice: 900, image: 'images/surmai2.png' },
  { name: 'Surmai Fillet Boneless', basePrice: 1500, image: 'images/surmai3.png' },
  { name: 'Rawas Slices', basePrice: 800, image: 'images/rawas1.png' },
  { name: 'Rawas Fillet Boneless', basePrice: 1600, image: 'images/rawas2.png' },
  { name: 'Halwa Slices', basePrice: 800, image: 'images/halwa1.png' },
  { name: 'Hamoor Slices', basePrice: 700, image: 'images/hamoor1.png' },
  { name: 'Dara Slices', basePrice: 800, image: 'images/dara1.png' },
  { name: 'Dara Fillet Boneless', basePrice: 1600, image: 'images/dara2.png' },
  { name: 'Sea Bass Slices', basePrice: 700, image: 'images/seabass1.png' },
  { name: 'Sea Bass Fillet Boneless', basePrice: 1500, image: 'images/seabass2.png' },
  { name: 'Red Snapper Slices', basePrice: 700, image: 'images/redsnapper1.png' },
  { name: 'Red Snapper Fillet Boneless', basePrice: 1400, image: 'images/redsnapper2.png' },
  { name: 'Koti Fillet Boneless', basePrice: 1000, image: 'images/koti.png' },
  { name: 'Mahi-Mahi Slices', basePrice: 400, image: 'images/mahimahi1.png' },
  { name: 'Mahi-Mahi Fillet Boneless', basePrice: 700, image: 'images/mahimahi2.png' },
  { name: 'Ghol Fish Slices', basePrice: 700, image: 'images/ghol1.png' },
  { name: 'Ghol Fish Fillet Boneless', basePrice: 1400, image: 'images/ghol2.png' },
  { name: 'Tuna Slices', basePrice: 450, image: 'images/tuna1.png' },
  { name: 'Tuna Fillet', basePrice: 850, image: 'images/tuna2.png' },
  { name: 'Bombil (Bombay Duck)', basePrice: 350, image: 'images/bombil.png' },
  { name: 'Mackerel (Bangda)', basePrice: 350, image: 'images/mackarel.png' },
  { name: 'Squid', basePrice: 500, image: 'images/squid.png' },
  { name: 'Lobster 1 piece', basePrice: 2600, image: 'images/lobster.png' },
  { name: 'Lobster 2 pcs', basePrice: 2400, image: 'images/lobster2.png' },
  { name: 'Lobster 3 pcs', basePrice: 1900, image: 'images/lobster3.png' },
  { name: 'Lobster 4 pcs', basePrice: 1400, image: 'images/lobster4.png' },
  { name: 'Crab 3-4 medium', basePrice: 900, image: 'images/crab.png' },
  { name: 'Crab 2 large', basePrice: 1300, image: 'images/crab2.png' },
  { name: 'Crab 1 XL', basePrice: 2000, image: 'images/crab4.png' },
];
// ▲▲▲ PASTE ABOVE ▲▲▲

if (typeof products !== 'undefined') {
  window.products = products;
} else {
  console.error('Products array not found in products-data.js.php');
}
