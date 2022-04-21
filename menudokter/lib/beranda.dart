import 'package:flutter/material.dart';

class BerandaPage extends StatefulWidget {
  @override
  State<BerandaPage> createState() => _BerandaPageState();
}

class _BerandaPageState extends State<BerandaPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('HostyKing'),
      ),
      body: Center(
        child: const Text(
          'Launcher page',
        ),
      ),
    );
  }
}
