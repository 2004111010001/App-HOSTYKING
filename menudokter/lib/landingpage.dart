import 'package:flutter/material.dart';
import 'package:menudokter/ListPage.dart';
import 'package:menudokter/akunpage.dart';
import 'package:menudokter/beranda.dart';
import 'package:menudokter/constant.dart';

class Landingpage extends StatefulWidget {
  @override
  State<Landingpage> createState() => _LandingpageState();
}

class _LandingpageState extends State<Landingpage> {
  int _bottomNavCurrentIndex = 0;
  List<Widget> _container = [new BerandaPage(), new ListPage(), new AkunPage()];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: _container[_bottomNavCurrentIndex],
      bottomNavigationBar: BottomNavigationBar(
          selectedItemColor: Palette.bg1,
          type: BottomNavigationBarType.fixed,
          onTap: (index) {
            setState(() {
              _bottomNavCurrentIndex = index;
            });
          },
          currentIndex: _bottomNavCurrentIndex,
          items: [
            BottomNavigationBarItem(
              activeIcon: new Icon(
                Icons.home,
                color: Palette.bg1,
              ),
              icon: new Icon(
                Icons.home,
                color: Colors.grey,
              ),
              label: 'Beranda',
            ),
            BottomNavigationBarItem(
              activeIcon: new Icon(
                Icons.document_scanner_rounded,
                color: Palette.bg1,
              ),
              icon: new Icon(
                Icons.document_scanner,
                color: Colors.grey,
              ),
              label: 'Daftar Pasien',
            ),
            BottomNavigationBarItem(
              activeIcon: new Icon(
                Icons.account_circle,
                color: Palette.bg1,
              ),
              icon: new Icon(
                Icons.person_outline,
                color: Colors.grey,
              ),
              label: 'Akun',
            ),
          ]),
    );
  }
}
