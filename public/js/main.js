document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("matrix-lienzo");
    const ctx = canvas.getContext("2d");
    const w = canvas.width = window.innerWidth;
    const h = canvas.height = window.innerHeight;
    const cols = Math.floor(w / 20) + 1;
    const ypos = Array(cols).fill(0);

    function matrix() {
        ctx.fillStyle = '#0001';
        ctx.fillRect(0, 0, w, h);

        ctx.fillStyle = '#7289DA';
        ctx.font = '15pt monospace';

        ypos.forEach((y, ind) => {
            const text = String.fromCharCode(Math.floor(Math.random() * 95) + 32);
            const x = ind * 20;
            ctx.fillText(text, x, y);
            if (y > 100 + Math.random() * 10000) ypos[ind] = 0;
            else ypos[ind] = y + 20;
        });
    }

    setInterval(matrix, 50);
});

function scrollToContent(elementId) {
    event.preventDefault();
    document.querySelector(elementId).scrollIntoView({ behavior: 'smooth' });
}