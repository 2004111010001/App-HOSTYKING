import 'package:flutter/material.dart';

class Landingpage extends StatefulWidget {
  @override
  State<Landingpage> createState() => _LandingpageState();
}

class _LandingpageState extends State<Landingpage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Launcher page'),
      ),
      body: Center(
        child: const Text(
          'Launcher page',
        ),
      ),
    );
  }
}
