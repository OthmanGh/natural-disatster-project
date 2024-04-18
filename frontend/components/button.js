import { View, Text, TextInput, StyleSheet, TouchableOpacity } from 'react-native';

const Button = ({ title, onPressed }) => {
  return (
    <View>
      <TouchableOpacity style={styles.button} onPress={onPressed}>
        <Text style={styles.btnText}>{title}</Text>
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  button: {
    width: 167,
    height: 48,
    borderRadius: 10,
    backgroundColor: '#FE6778',
  },
  btnText: {
    color: 'white',
    fontSize: 16,
    fontWeight: 'bold',
    textAlign: 'center',
    paddingTop: '8%',
  },
});

export default Button;
