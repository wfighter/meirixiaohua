<div data-role="fieldcontain">
<label for="answer"><b>请给出下列问题的答案:</b> What is {$number1} + {$number2} =</label>			
 <input type="text" id="answer" name="answer" />
{if isset($register_captcha_error)}<br /><div class="error">{$register_captcha_error}</div>{/if}
</div>
