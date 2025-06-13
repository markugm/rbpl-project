import React from "react";
import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Progress } from "@/components/ui/progress";
import { BookOpen, FileText, User, Settings, LogOut, Home } from "lucide-react";

export default function Dashboard() {
  return (
    <div className="flex h-screen">
      {/* Sidebar */}
      <div className="w-64 bg-blue-900 text-white p-4 space-y-6">
        <div className="text-xl font-bold flex items-center space-x-2">
          <img src="/logo-bike.png" alt="logo" className="w-8 h-8" />
          <span>JAGO SEPEDA</span>
        </div>
        <nav className="space-y-4">
          <div className="flex items-center space-x-2">
            <Home className="w-4 h-4" />
            <span>Beranda</span>
          </div>
          <div className="flex items-center space-x-2">
            <BookOpen className="w-4 h-4" />
            <span>Kursus</span>
          </div>
          <div className="flex items-center space-x-2">
            <FileText className="w-4 h-4" />
            <span>Hasil Kuis</span>
          </div>
          <div className="flex items-center space-x-2">
            <User className="w-4 h-4" />
            <span>Profil</span>
          </div>
        </nav>
        <div className="absolute bottom-8 space-y-4">
          <div className="flex items-center space-x-2">
            <Settings className="w-4 h-4" />
            <span>Pengaturan</span>
          </div>
          <div className="flex items-center space-x-2">
            <LogOut className="w-4 h-4" />
            <span>Keluar</span>
          </div>
        </div>
      </div>

      {/* Main Content */}
      <div className="flex-1 bg-gray-100 p-6 overflow-auto">
        {/* Header */}
        <div className="flex justify-between items-center mb-6">
          <div>
            <h1 className="text-2xl font-semibold">Selamat Pagi, Ajuy Sutiyo</h1>
            <p className="text-gray-500">Hari ini adalah hari ke-7 pelatihanmu</p>
            <Button variant="outline" className="mt-2">Buka Akun Kamu</Button>
          </div>
          <div className="space-y-2 text-right">
            <div className="text-sm">2/16 Kursus</div>
            <div className="text-sm">4/7 Kuis</div>
            <div className="flex items-center justify-end space-x-2 mt-2">
              <span>Ajuy Sutiyo</span>
              <img src="/profile.jpg" alt="profile" className="w-8 h-8 rounded-full" />
            </div>
          </div>
        </div>

        {/* Kursus */}
        <h2 className="text-xl font-semibold mb-2">Kursus</h2>
        <div className="grid grid-cols-4 gap-4 mb-6">
          {["Pengenalan Sepeda", "Sistem Penggerak", "Sistem Pengereman dan Keselamatan", "Sistem Suspensi dan Kenyamanan Berkendara"].map((title, i) => (
            <Card key={i}>
              <CardContent className="p-4 space-y-2">
                <div className="text-lg font-medium">{title}</div>
                <div className="text-sm text-gray-500">{i + 2} Materi • {i % 2 + 1} Kuis</div>
                <Button className="w-full">Lihat</Button>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Hasil Kuis */}
        <h2 className="text-xl font-semibold mb-2">Hasil Kuis Kamu</h2>
        <div className="grid grid-cols-4 gap-4">
          {[
            { score: 80, title: "Anatomi Sepeda", date: "06/04/2025" },
            { score: 85, title: "Sistem Penggerak", date: "06/04/2025" },
            { score: 80, title: "Rantai dan Pemeliharaannya", date: "07/04/2025" },
            { score: 90, title: "Sistem Pengereman dan Keselamatan", date: "08/04/2025" },
          ].map((item, i) => (
            <Card key={i}>
              <CardContent className="p-4 space-y-2">
                <div className="text-2xl font-bold">{item.score}/100</div>
                <div className="text-sm">{item.title}</div>
                <div className="text-xs text-gray-500">{item.date}</div>
                <Button className="w-full">Review</Button>
              </CardContent>
            </Card>
          ))}
        </div>
        <footer className="text-center text-sm text-gray-400 mt-6">
          Copyright © jagosepeda.com 2025
        </footer>
      </div>
    </div>
  );
}
