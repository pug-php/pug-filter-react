# pug-filter-react

[![Latest Stable Version](https://poser.pugx.org/pug-php/pug-filter-react/v/stable.png)](https://packagist.org/packages/pug-php/pug-filter-react)
[![Build Status](https://travis-ci.org/pug-php/pug-filter-react.svg?branch=master)](https://travis-ci.org/pug-php/pug-filter-react)
[![Code Climate](https://codeclimate.com/github/pug-php/pug-filter-react/badges/gpa.svg)](https://codeclimate.com/github/pug-php/pug-filter-react)
[![Test Coverage](https://codeclimate.com/github/pug-php/pug-filter-react/badges/coverage.svg)](https://codeclimate.com/github/pug-php/pug-filter-react/coverage)
[![StyleCI](https://styleci.io/repos/91263927/shield?branch=master)](https://styleci.io/repos/91263927)

This template:
```pug
body
  :jsx
    /** @jsx dom */
    var dom = React.createElement;

    ReactDOM.render(
      <h1>Hello world!</h1>,
      document.getElementById('main')
    );
```

will be rendered like this:
```html
<body>
  <script type="text/javascript">
    "use strict";

    /** @jsx dom */
    var dom = React.createElement;

    ReactDOM.render(dom(
        "h1",
        null,
        "Hello world!"
    ), document.getElementById('main'));
  </script>
</body>
```
