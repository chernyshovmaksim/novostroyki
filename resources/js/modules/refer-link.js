export default () => {
    const referLink = document.querySelector('#refer-link > span');
    if (referLink) {
        referLink.addEventListener('click', e => {
            const referLinkText = referLink.textContent.trim()
            navigator.clipboard.writeText(referLinkText)
                .then(() => {
                    new Fancybox([{
                        src: '<p>Ваша ссылка скопирована</p>',
                        type: 'html'
                    }]);
                })
        });
    }
}