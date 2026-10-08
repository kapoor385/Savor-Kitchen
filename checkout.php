<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout | Savoré Kitchen</title><link rel="icon" href="logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{--ink:#17231f;--cream:#f7f3eb;--paper:#fffdf9;--sage:#3f5b48;--gold:#c78b3a;--muted:#718078;--line:#e5e0d6}*{box-sizing:border-box}body{margin:0;background:var(--cream);color:var(--ink);font-family:"DM Sans",sans-serif}.container{width:min(1120px,92%);margin:auto}a{text-decoration:none;color:inherit}.top{height:78px;background:rgba(247,243,235,.94);border-bottom:1px solid var(--line);display:flex;align-items:center}.brand{display:flex;align-items:center;gap:11px;font-family:"Playfair Display";font-size:25px;font-weight:800}.mark{width:42px;height:42px;background:var(--sage);color:#fff;border-radius:13px;display:grid;place-items:center}.brand span:last-child{color:var(--gold)}.back{margin-left:auto;color:var(--sage);font-weight:700}.checkout{padding:58px 0 80px}.heading{text-align:center;margin-bottom:38px}.eyebrow{text-transform:uppercase;letter-spacing:.14em;color:var(--sage);font-size:12px;font-weight:800}.heading h1{font-family:"Playfair Display";font-size:48px;margin:10px 0}.heading p{color:var(--muted)}.grid{display:grid;grid-template-columns:1.35fr .75fr;gap:28px;align-items:start}.card{background:var(--paper);border:1px solid var(--line);border-radius:22px;padding:30px}.card h2{font-family:"Playfair Display";margin:0 0 23px;font-size:27px}.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}.field{grid-column:span 1}.field.full{grid-column:1/-1}.field label{display:block;font-size:13px;font-weight:700;margin-bottom:7px}.field input,.field select{width:100%;padding:13px 14px;border:1px solid #d7dcd7;border-radius:11px;background:#fff;outline:none;font:inherit}.field input:focus,.field select:focus{border-color:var(--sage)}.checks{border-top:1px solid var(--line);margin-top:24px;padding-top:20px;display:grid;gap:11px;color:#59665f;font-size:14px}.checks label{display:flex;gap:10px}.order{position:sticky;top:22px}.order-head{display:flex;justify-content:space-between;align-items:center}.count{background:#e9efe5;color:var(--sage);border-radius:20px;padding:6px 10px;font-size:12px;font-weight:800}.items{list-style:none;padding:0;margin:18px 0}.item{display:flex;align-items:center;gap:11px;border-bottom:1px solid var(--line);padding:13px 0}.item img{width:58px;height:58px;object-fit:cover;border-radius:12px}.item h3{font-size:14px;margin:0 0 4px}.item small{color:var(--muted)}.total{display:flex;justify-content:space-between;border-top:1px solid var(--line);padding-top:18px;font-weight:800;font-size:18px}.promo{display:flex;margin-top:18px}.promo input{flex:1;min-width:0;border:1px solid var(--line);padding:12px;border-radius:10px 0 0 10px}.promo button{border:0;background:#e8ece7;padding:0 14px;border-radius:0 10px 10px 0;font-weight:700}.pay{width:100%;margin-top:20px;padding:15px;border:0;border-radius:12px;background:var(--sage);color:#fff;font:inherit;font-weight:800;cursor:pointer}.note{color:var(--muted);font-size:12px;text-align:center;margin:13px 0 0;line-height:1.5}.success{display:none;text-align:center;padding:45px 20px}.success.show{display:block}.success i{font-size:54px;color:var(--sage)}.success h2{font-family:"Playfair Display";font-size:34px}.footer{border-top:1px solid var(--line);padding:22px 0;color:var(--muted);font-size:12px;display:flex;justify-content:space-between}@media(max-width:800px){.grid{grid-template-columns:1fr}.order{position:static}.form-grid{grid-template-columns:1fr}.field,.field.full{grid-column:auto}.heading h1{font-size:40px}}
</style>
</head>
<body>
<header class="top"><div class="container" style="display:flex;align-items:center"><a class="brand" href="index.php"><span class="mark">S</span>Savor<span>é</span></a><a class="back" href="index.php">← Back to menu</a></div></header>
<main class="checkout"><div class="container">
<div class="heading"><div class="eyebrow">Almost there</div><h1>Complete your order</h1><p>Tell us where to send your favorites. This demo checkout does not process real payments.</p></div>
<div class="grid">
<section class="card" id="checkoutFormWrap"><h2>Delivery details</h2>
<form id="checkoutForm" onsubmit="placeOrder(event)" class="form-grid">
<div class="field"><label>First name</label><input required placeholder="Alex"></div><div class="field"><label>Last name</label><input required placeholder="Morgan"></div>
<div class="field full"><label>Email address</label><input type="email" required placeholder="alex@example.com"></div>
<div class="field full"><label>Delivery address</label><input required placeholder="1847 Willow Street"></div>
<div class="field"><label>City</label><input required placeholder="Austin"></div><div class="field"><label>ZIP code</label><input required placeholder="78704"></div>
<div class="field full"><label>Country</label><select required><option value="">Choose country</option><option>United States</option><option>Canada</option></select></div>
<div class="checks full"><label><input type="checkbox"> Delivery address is the same as billing address</label><label><input type="checkbox"> Save my details for next time</label></div>
<div class="field full"><label>Payment method</label><select required><option value="">Choose a demo payment method</option><option>Card on delivery</option><option>Pay at pickup</option></select></div>
<div class="field full"><label>Order note</label><input placeholder="Anything we should know?"></div>
<div class="field full"><button class="pay" type="submit">Place order</button><p class="note">No real payment is taken on this demo page.</p></div>
</form>
<div class="success" id="success"><i>✓</i><h2>Order received!</h2><p>Thanks for choosing Savoré Kitchen. Your demo order has been placed successfully.</p><a class="pay" style="display:inline-block;width:auto;padding:13px 24px" href="index.php">Return to home</a></div>
</section>
<aside class="card order"><div class="order-head"><h2 style="margin:0">Your order</h2><span class="count" id="count">0 items</span></div><ul class="items" id="items"></ul><div class="promo"><input placeholder="Promo code"><button onclick="alert('Demo promo: no discount applied.')">Apply</button></div><div class="total"><span>Total</span><span id="total">$0.00</span></div></aside>
</div></div></main>
<footer><div class="container footer"><span>© 2026 Savoré Kitchen</span><span>1847 Willow Street · Tokyo, Japan · +81 3-5550-1847</span></div></footer>
<script>
function load(){const c=JSON.parse(localStorage.getItem('cart')||'[]');document.getElementById('count').textContent=c.length+' item'+(c.length===1?'':'s');const list=document.getElementById('items');list.innerHTML=c.length?c.map(i=>`<li class="item"><img src="${i.image}" alt=""><div style="flex:1"><h3>${i.title}</h3><small>$${Number(i.price).toFixed(2)}</small></div></li>`).join(''):'<li style="color:#718078;padding:25px 0;text-align:center">Your order is empty. <a style="color:#3f5b48;font-weight:700" href="index.php#menu">Browse the menu</a></li>';document.getElementById('total').textContent='$'+c.reduce((s,i)=>s+Number(i.price),0).toFixed(2)}
function placeOrder(e){e.preventDefault();document.getElementById('checkoutForm').style.display='none';document.getElementById('success').classList.add('show');localStorage.removeItem('cart');localStorage.removeItem('totalCost');}
load();
</script>
</body>
</html>