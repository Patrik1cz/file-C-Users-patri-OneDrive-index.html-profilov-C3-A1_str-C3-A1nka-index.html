document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    
    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Zabrání odeslání formuláře

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Zde můžete přidat logiku pro zpracování formuláře, např. odeslání na server

        alert(`Děkujeme za zprávu, ${name}!`);
        form.reset(); // Vyčistí formulář
    });
});
