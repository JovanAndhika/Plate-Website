<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- REACT -->
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <!-- BABEL -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div id="root">
        <script type="text/babel">
            const container = document.getElementById('root');
            const root = ReactDOM.createRoot(container);
            root.render(<h1>Table for admin</h1>);
    </script>
    </div>
</body>

</html>