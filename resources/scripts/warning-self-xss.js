var title_style = 'color: red; background: yellow; font-size: 24px;';
var message_style = 'color: black; font-size: 18px;';
var link_style = 'color: black; font-style: italic; font-size: 12px;';

console.log('%c%s', title_style, 'Avertissement');
console.log('%c%s', message_style, 'En utilisant cette console, vous vous exposez au risque que des personnes malveillantes se fassent passer pour vous et volent vos informations grâce à une attaque appelée Self-XSS. Ne saisissez pas et ne copiez pas du code que vous ne comprenez pas.');
console.log('%c%s', link_style, 'Pour en savoir plus: https://fr.wikipedia.org/wiki/Cross-site_scripting');