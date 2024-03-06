import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route, Link } from "react-router-dom";

import Home from "./Home";
import KedaiKopi from "./KedaiKopi";

function MyApp() {
    return (
        <div className="app-belanja">
            <Header />
            <FormContent />
            <GroceryList />
        </div>
    );
}

function Header() {
    return <h1 className="header">Catatan Belanjaku 📝</h1>;
}

function FormContent() {
    return (
        <form className="add-form">
            <h3>Hari ini belanja apa kita?</h3>
            <div className="container-addform">
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="text" placeholder="nama barang..." />
            </div>
            <button>Tambah</button>
        </form>
    );
}

function GroceryList() {
    return (
        <>
            <div className="list">
                <ul>
                    <li>
                        <input type="checkbox" defaultChecked={true} />
                        <span style={{ textDecoration: "line-through" }}>
                            1 Kopi
                        </span>
                        <button>&times;</button>
                    </li>
                    <li>
                        <input type="checkbox" />
                        <span>5 Gula Pasir</span>
                        <button>&times;</button>
                    </li>
                    <li>
                        <input type="checkbox" />
                        <span>3 Air Mineral</span>
                        <button>&times;</button>
                    </li>
                </ul>
            </div>
            <div className="actions">
                <select>
                    <option value="input">
                        Urutkan berdasarkan urutan input
                    </option>
                    <option value="name">
                        Urutkan berdasarkan nama barang
                    </option>
                    <option value="checked">Urutkan berdasarkan ceklis</option>
                </select>
                <button>Bersihkan Daftar</button>
            </div>
        </>
    );
}

ReactDOM.createRoot(document.getElementById("root")).render(<MyApp />);
