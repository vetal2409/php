<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Abstract classes</title>
</head>
<body>
<h2>Abstract classes vs Interfaces:</h2>
<table>
    <thead>
    <tr>
        <th>Abstract class</th>
        <th>Interface</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>property</td>
        <td>-</td>
    </tr>
    <tr>
        <td>methods with realization</td>
        <td>-</td>
    </tr>
    <tr>
        <td>declare methods without realization</td>
        <td>declare methods without realization</td>
    </tr>
    <tr>
        <td>abstract methods can't be private</td>
        <td>all methods must be public</td>
    </tr>
    <tr>
        <td>creating object is impossible</td>
        <td>creating object is impossible</td>
    </tr>
    <tr>
        <td>extends</td>
        <td>implements</td>
    </tr>
    <tr>
        <td>a child class can extend only 1 abstract class</td>
        <td>a child class can realize several interfaces</td>
    </tr>
    <tr>
        <td>abstract class can extend other classes and implement interfaces</td>
        <td>interface can <strong>extend(not implement) another interface</strong></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
</body>
</html>