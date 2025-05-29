    const countdown = document.getElementById('countdown');
    const launchDate = new Date("<?= $launchDate ?>").getTime();

    const timer = setInterval(() => {
      const now = new Date().getTime();
      const diff = launchDate - now;

      if (diff <= 0) {
        clearInterval(timer);
        countdown.innerHTML = "We're live!";
        return;
      }

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);

      countdown.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }, 1000);
