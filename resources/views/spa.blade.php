
<div id="react-app">

</div>

<script>
    import React from 'react';
    import ReactDOM from 'react-dom';
    import ExampleComponent from '../js/components/ExampleComponent';

    if (document.getElementById('react-app')) {
        ReactDOM.render( <ExampleComponent/> , document.getElementById('react-app'));
    }
</script>