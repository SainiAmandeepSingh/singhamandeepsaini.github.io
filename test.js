const fs = require('fs');

const html = fs.readFileSync('index.html', 'utf8');

function assert(condition, message) {
  if (!condition) {
    throw new Error(message || 'Assertion failed');
  }
}

assert(/assets\/js\/main\.js/.test(html), 'main.js script tag missing');
assert(/assets\/css\/style\.css/.test(html), 'style.css link tag missing');

console.log('All tests passed');
