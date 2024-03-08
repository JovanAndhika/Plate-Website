import React, { useId } from "react";
import ReactDOM from "react-dom/client";
import { useState } from "react";
import { BrowserRouter, Routes, Route, Link } from "react-router-dom";

import Home from "./Home";
import KedaiKopi from "./KedaiKopi";

const groceryItems = [
    {
        id: 1,
        namaItem: "Kopi Bubuk",
        quantity: 5,
        checked: true,
    },
    {
        id: 2,
        namaItem: "Gula Pasir",
        quantity: 5,
        checked: false,
    },
    {
        id: 3,
        namaItem: "Gula Pasir",
        quantity: 5,
        checked: false,
    },
];

export default function MyApp() {
    const [items, setItems] = useState(groceryItems);

    function handleAddItem(item) {
        setItems([...items, item]);
    }

    function handleDeleteItem(id) {
        setItems((items) => items.filter((item) => item.id !== id));
    }

    function handleToggleItem(id) {
        setItems((items) =>
            items.map((item) =>
                item.id === id ? { ...item, checked: !item.checked } : item
            )
        );
    }

    function handleClearItems() {
        setItems([]);
    }

    return (
        <div className="app-belanja">
            <Header />
            <Form onAddItem={handleAddItem} />
            <GroceryList
                items={items}
                onDeleteItem={handleDeleteItem}
                onToggleItem={handleToggleItem}
                onClearItems={handleClearItems}
            />
            <Footer items={items} />
        </div>
    );
}

function Header() {
    return <h1 className="header">Catatan Belanjaku 📝</h1>;
}

function Form({ onAddItem }) {
    const [namaItem, setNamaItem] = useState("");
    const [quantity, setQuantity] = useState(1);

    function handleSubmit(e) {
        e.preventDefault();

        if (!namaItem) return;

        const newItem = { namaItem, quantity, checked: false, id: Date.now() };
        onAddItem(newItem);

        console.log(newItem);

        setNamaItem("");
        setQuantity(1);
    }

    const quantityNum = [...Array(20)].map((_, i) => (
        <option value={i + 1} key={i + 1}>
            {i + 1}
        </option>
    ));

    return (
        <form className="add-form" onSubmit={handleSubmit}>
            <h3>Hari ini belanja apa kita?</h3>
            <select
                value={quantity}
                onChange={(e) => setQuantity(Number(e.target.value))}
            >
                {quantityNum}
            </select>
            <input
                type="text"
                placeholder="nama barang..."
                value={namaItem}
                onChange={(e) => setNamaItem(e.target.value)}
            />
            <button>Tambah</button>
        </form>
    );
}

function GroceryList({ items, onDeleteItem, onToggleItem, onClearItems }) {
    const [sortBy, setSortBy] = useState("input");

    let sortedItems;

    switch (sortBy) {
        case "namaItem":
            sortedItems = items
                .slice()
                .sort((a, b) => a.namaItem.localeCompare(b.namaItem));
            break;
        case "checked":
            sortedItems = items.slice().sort((a, b) => a.checked - b.checked);
            break;
        default:
            sortedItems = items;
            break;
    }

    return (
        <>
            <div className="list">
                <ul>
                    {sortedItems.map((item) => (
                        <Item
                            item={item}
                            key={item.id}
                            onDeleteItem={onDeleteItem}
                            onToggleItem={onToggleItem}
                        />
                    ))}
                </ul>
            </div>
            <div className="actions">
                <select
                    value={sortBy}
                    onChange={(e) => setSortBy(e.target.value)}
                >
                    <option value="input">
                        Urutkan berdasarkan urutan input
                    </option>
                    <option value="namaItem">
                        Urutkan berdasarkan nama barang
                    </option>
                    <option value="checked">Urutkan berdasarkan ceklis</option>
                </select>
                <button onClick={onClearItems}>Bersihkan Daftar</button>
            </div>
        </>
    );
}

function Item({ item, onDeleteItem, onToggleItem }) {
    return (
        <li key={item.id}>
            <input
                type="checkbox"
                checked={item.checked}
                onChange={() => onToggleItem(item.id)}
            />
            <span
                style={item.checked ? { textDecoration: "line-through" } : {}}
            >
                {item.quantity} {item.namaItem}
            </span>
            <button onClick={() => onDeleteItem(item.id)}>&times;</button>
        </li>
    );
}

function Footer({ items }) {
    if (items.length === 0)
        return (
            <footer className="stats">Daftar belanjaan masih kosong!</footer>
        );

    const totalItems = items.length;
    const checkedItems = items.filter((item) => item.checked).length;
    const percentage = Math.round((checkedItems / totalItems) * 100);

    return (
        <footer className="stats">
            Ada {totalItems} barang di daftar belanjaan, {checkedItems} barang
            sudah dibeli ({percentage}%)
        </footer>
    );
}

ReactDOM.createRoot(document.getElementById("root")).render(<MyApp />);
