// Filter
document.addEventListener('DOMContentLoaded', () => {
  const btnFilter = document.getElementById('btnFilter');
  const hotelGrid = document.getElementById('hotelGrid');

  btnFilter.addEventListener('click', () => {
    const loc = document.getElementById('filterLocation').value;
    const type = document.getElementById('filterType').value;
    const price = document.getElementById('filterPrice').value;

    const cards = hotelGrid.querySelectorAll('.hotel-card');

    cards.forEach(card => {
      const cardLoc = card.dataset.location;
      const cardType = card.dataset.type;
      const cardPrice = parseInt(card.dataset.price);

      let show = true;

      if(loc && cardLoc !== loc) show = false;
      if(type && cardType !== type) show = false;
      if(price && cardPrice > parseInt(price)) show = false;

      card.style.display = show ? 'block' : 'none';
    });
  });
});
