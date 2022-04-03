using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class RegisterUser : MonoBehaviour
{
    public InputField UsernameInput;
    public InputField PasswordInput;
    public InputField ConfirmPasswordInput;
    public Button SubmitButton;
    
    void Start()
    {
        
        SubmitButton.onClick.AddListener(() => {
            if (PasswordInput.text == ConfirmPasswordInput.text)
            {
              StartCoroutine(Main.Instance.Web.RegisterUser(UsernameInput.text, PasswordInput.text));
            }
            else
            {
               Debug.Log("Password incorecct. Try again.");
            }
        });
    }
}